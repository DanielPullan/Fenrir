<?php
  namespace Krypton;

  class Grid
  {
      function Grid1 {
      global $mysql;
  	  $sql = "SELECT * FROM content WHERE rank = 1";
      $run = $mysql->Connect->prepare($sql);

      return $run->fetchAll();
    }
  }

?>
