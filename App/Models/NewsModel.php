<?php

namespace App\Models;

use \PDO;

class NewsModel extends Model
{
    public function getNewsCount() 
    {
        $sql = "SELECT COUNT(*) FROM news";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchColumn();
        return $res;
    }
    
    public function getNews($page, $limit)
    {
        $offset = ($page - 1) * $limit;
        $sql = "SELECT id, date, title, announce FROM news ORDER BY date DESC LIMIT ? OFFSET ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $limit, PDO::PARAM_INT );
        $stmt->bindValue(2, $offset, PDO::PARAM_INT);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;        
    }

    public function getNewsById($id)
    {
        $sql = "SELECT * FROM news WHERE id = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getLastNews()
    {
        $sql = "SELECT title, announce, image FROM news ORDER BY date DESC LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}