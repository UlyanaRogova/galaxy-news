<?php
class News
{
    private $link;

    public function __construct()
    {
        require 'Db/Connect.php';

        mysqli_query($link, "SET NAMES 'utf8'");

        $this->link = $link;
    }

    public function getAll($newsId)
    {
        $query = "SELECT * FROM news WHERE id = $newsId LIMIT 1";

        $res = $this->getQuery($query);

        $row = mysqli_fetch_assoc($res);

        return $row;
    }

    public function fetchBanner()
    {
        $query = "SELECT id, title, announce, image FROM news ORDER BY DATE DESC LIMIT 1";

        $res = $this->getQuery($query);

        $row = mysqli_fetch_assoc($res);

        return $row;
    }

    public function getPageId()
    {
        if (isset($_GET['page']) && !empty($_GET['page'])) {
            $pageId = (int) $_GET['page'];
            return $pageId;
        } else {
            $pageId = 1;
            return $pageId;
        }
    }

    public function fetchNews()
    {
        $countNews = 4;

        $pageId = $this->getPageId();

        $newsOnPage = ($pageId - 1) * $countNews;

        $query = "SELECT id, date, title, announce FROM news ORDER BY DATE DESC LIMIT $newsOnPage, $countNews";

        $res = $this->getQuery($query);

        return $this->prepareData($res);
    }

    public function fetchCountPages()
    {
        $query = "SELECT COUNT(*) as count FROM news";

        $res = $this->getQuery($query);

        $count = mysqli_fetch_assoc($res)['count'];

        return $count;
    }

    private function getQuery($query)
    {
        $result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));

        return $result;
    }

    private function prepareData($res)
    {
        for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row)
            ;

        return $data;
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }
}
?>