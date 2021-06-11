<?php

namespace Core\Interfaces;

interface ModelInterface {

    public function create($article);

    public function getList();

    public function getOne($id);

    public function update($id);

    public function delete($id);
}
