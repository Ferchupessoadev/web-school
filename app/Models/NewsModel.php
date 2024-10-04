<?php

namespace App\Models;

class NewsModel extends Model
{
    public $table = 'news';

    /**
     * get news
     * @return array
     */
    public function getNews(): array
    {
        $sql = "SELECT * FROM $this->table LIMIT 10";
        $result = $this->query($sql)->get();
        return $result;
    }

    /**
     * get news by title
     *
     * @param string $title
     * @return array
     */
    public function getNewsByTitle(string $title): array
    {
        $sql = "SELECT * FROM $this->table WHERE title = ?";
        $params = ['s' => $title];
        $result = $this->prepare($sql, $params)->get();
        return $result;
    }
}
