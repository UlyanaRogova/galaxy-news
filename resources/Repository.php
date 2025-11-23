<?php 
    class Repository{
        private function getRepo(){
            require 'connect.php';
            mysqli_query($link, "SET NAMES 'utf8'");
            $query = "SELECT * FROM news";
            $res = mysqli_query($link, $query) or die(mysqli_error($link));
            for ($data = []; $row = mysqli_fetch_assoc($res);$data[] = $row);
            mysqli_close($link);
            return $data;
            
        }

        public function getTitles(){
            $titles = [];
            foreach ($this->getRepo() as $news){
                $titles[$news['id']] = $news['title'];
            }
            return $titles;
        }

        public function setMainNews(){
            require 'connect.php';
            mysqli_query($link, "SET NAMES 'utf8'");
            $query_main = "SELECT id, title, announce, image FROM news ORDER BY DATE DESC LIMIT 1";
            $res = mysqli_query($link, $query_main) or die(mysqli_error($link));
            for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            mysqli_close($link);
            return $data;
        }

        public function setId() {
            if (isset($_GET['page']) && !empty($_GET['page'])) {
                $id_page = (int) $_GET['page'];
                return $id_page;
            } else {
                $id_page = 1;
                return $id_page;
            }
        }

        public function setGridNews(){
            $count_news = 4;
            require 'connect.php';
            mysqli_query($link, "SET NAMES 'utf8'");

            $id_page = $this->setId();
            $news_on_page = ($id_page - 1) * $count_news;

            $query_news = "SELECT id, date, title, announce FROM news ORDER BY DATE DESC LIMIT $news_on_page, $count_news";
            $res = mysqli_query($link, $query_news) or die(mysqli_error($link));
            for($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
            mysqli_close($link);
            return $data;  
        }

        public function setPage(){
            require 'connect.php';
            mysqli_query($link, "SET NAMES 'utf8'");
            $query_count = "SELECT COUNT(*) as count FROM news";
            $res = mysqli_query($link, $query_count) or die(mysqli_error($link));
            $count = mysqli_fetch_assoc($res)['count'];
            mysqli_close($link);
            return $count;
        }

        public function getNews(){
            $content = [];
            foreach($this->getRepo() as $news){
                $content[$news['id']] = $news;
            }
            return $content;
        }
    }
?>