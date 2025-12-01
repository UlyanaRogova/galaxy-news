<?php


class Repository
{
    private $link;

    public function __construct()
    {
        require 'connect.php';

        mysqli_query($link, "SET NAMES 'utf8'");

        $this->link = $link;
    }

    private function fetchAll()
    {
        $query = "SELECT * FROM news";

        $res = $this->getQuery($query);

        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row)
            ;

        return $data;
    }

    public function getTitles()
    {
        $titles = [];
        foreach ($this->fetchAll() as $news) {
            $titles[$news['id']] = $news['title'];
        }
        return $titles;
    }

    public function fetchBanner()
    {
        $query = "SELECT id, title, announce, image FROM news ORDER BY DATE DESC LIMIT 1";

        $res = $this->getQuery($query);

        return $this->prepareData($res);
    }

    public function getPageId()
    {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $id_page = (int) $_GET['page'];
            return $id_page;
        } else {
            $id_page = 1;
            return $id_page;
        }
    }

    public function fetchNews()
    {
        $count_news = 4;
        $id_page = $this->getPageId();
        $news_on_page = ($id_page - 1) * $count_news;

        $query = "SELECT id, date, title, announce FROM news ORDER BY DATE DESC LIMIT $news_on_page, $count_news";

        $res = $this->getQuery($query);

        return $this->prepareData($res);
    }

    public function fetchCountPage()
    {
        $query = "SELECT COUNT(*) as count FROM news";

        $res = $this->getQuery($query);

        $count = mysqli_fetch_assoc($res)['count'];

        return $count;
    }

    public function getNewsId()
    {
        $content = [];

        foreach ($this->fetchAll() as $news) {
            $content[$news['id']] = $news;
        }
        return $content;
    }

    private function getQuery($query)
    {
        $result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));

        return $result;
    }

    private function prepareData($res)
    {
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

        return $data;
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }
}
?>