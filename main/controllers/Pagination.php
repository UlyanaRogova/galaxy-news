<?php
require_once 'resources/Repository.php';
    class Pagination extends Repository{
        private $count_news = 4;
        private $items_on_page = 1;
        private $count_pages;
        private $first_page;
        private $last_page;

        public function getPage(){
            $count = $this->setPage();
            $id_page = $this->setId();
            
            $this->count_pages = ceil($count / $this->count_news);
            $id_page = (int) $id_page;
            
            $this->first_page = max(1, $id_page - $this->items_on_page);
            $this->last_page = min($this->count_pages, $id_page + $this->items_on_page);

            if($id_page <= $this->items_on_page){
                $this->first_page = 1;
                $this->last_page = min($this->count_pages, 2 * $this->items_on_page + 1);
            }

            if($id_page >= $this->count_pages - $this->items_on_page){
                $this->last_page = $this->count_pages;
                $this->first_page = max(1, $this->count_pages - 2 * $this->items_on_page);
	        }
            return ['id_page' => $id_page, 'count_pages' => $this->count_pages, 'first_page' => $this->first_page, 'last_page' => $this->last_page];
        }

        public function showPrev(){
            $pages = $this->getPage();
            $id_page = $pages['id_page'];
            if ($id_page != 1){
		        $prev = $id_page - 1;
                echo "<a href=\"?page=$prev\"><div class=\"prev-page\">&#10132</div></a>";
            } else {
                echo '';
            }
        }

        public function showPages(){
            $pages = $this->getPage();
            $first_page = $pages['first_page'];
            $last_page = $pages['last_page'];
            $id_page = $pages['id_page'];
            $page_href = [];
            for ($i = $first_page; $i <= $last_page; $i++){
                if ($i == $id_page) {
                    $class = 'active';
                    echo "<a href=\"?page=$i\"><div class=\"page $class\">$i</div></a>";
                } else {
                    echo "<a href=\"?page=$i\"><div class=\"page\">$i</div></a>";
                }
            }
            return $page_href;
        }

        public function showNext(){
            $pages = $this->getPage();
            $id_page = $pages['id_page'];
            $count_pages = $pages['count_pages'];
            if ($id_page != $count_pages){
		        $next = $id_page + 1;
                echo "<a href=\"?page=$next\"><div class=\"next-page\">&#10132</div></a>";
            } else{
                return '';
            }
        }
    }
?>