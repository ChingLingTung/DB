<?php
if(!isset($pageName)){
$pageName='';
}
?>
<style>
  nav.navbar ul.navbar-nav .nav-link.active {
    background-color: skyblue;
    font-weight: 900;
    color: blue;
    border-radius: 30px 5px 30px 5px;
  }
</style>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">設施資料維護系統</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='list'? 'active':'' ?>" href="./<?= $formName?>_list.php">資料清單</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='add'? 'active':'' ?>" href="./<?= $formName?>_add.php">新增資料</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?= $pageName=='edit'? 'active':'' ?>" href="./<?= $formName?>_edit.php">修改資料</a>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">


        </ul>
        </div>
      </div>
    </nav>

  </div>