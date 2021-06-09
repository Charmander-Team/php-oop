<?php

namespace Vendor\Interfaces;

interface ManagerInterface {

    public function create($article);

    public function getList();

    public function getOne($id);

    public function update();

    public function delete($id);
}
