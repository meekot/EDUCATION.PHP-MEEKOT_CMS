<?php

class Model_Post extends Model
{
    public function get_post($id)
    {
        $result = $this->mysql('SELECT * FROM posts WHERE id = :id', [
            'id' => $id
        ]);

        return $result;
    }
}
