<?php

namespace Core\Interfaces;

interface ModelInterface {

    public function create($article);

    public function getList();

    public function getOne();

    public function update();

    public function delete();
}
