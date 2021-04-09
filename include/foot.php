<?php
$menu = '';
foreach ($pages as $k => $p) {
  $menu.='<span class="footmenu">';
  $menu.='<a class="menu" href="http://x2.if.ua'.($p['path']).'"';
  if ($k === $page_key) {
    $menu.=' style="color: yellow"';
  }
  $menu.='>'.htmlspecialchars($p['title']);
  $menu.='</a>';
  $menu.='</span>';
}
print($menu);
?><br> &nbsp; <br>
<span class="copyleft">(&#596;) Zj on behalf of FSF, 2021</span>
