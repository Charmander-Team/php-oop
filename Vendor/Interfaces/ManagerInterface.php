<?php

namespace Vendor\Interfaces;

interface ManagerInterface {

    public function create($article);

    public function getList();

    public function getOne();

    public function update();

    public function delete();
}
