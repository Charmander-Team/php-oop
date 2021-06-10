<?php

namespace Core\Interfaces;

interface ModelInterface {

    public function create($article);

    public function getList();

    public function getOne($id);

    public function update();

    public function delete($id);
}
