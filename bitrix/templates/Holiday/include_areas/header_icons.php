
<?
$page = $APPLICATION->GetCurPage();
$page_a = explode("/",$page);
//echo $page_a[1];
?>

							<li class="item_5 <?=($page_a[1]=="sibiriada") ?'active':'';?>">
                <a class="link__city" href="/sibiriada" data-cookie="sibiriada">
                  <div class="item__inner">
                    <img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_sibiriada.svg" alt="">
                  </div>
                </a>
              </li>
							<li class="item_4 <?=($page_a[1]=="holiday-super") ?'active':'';?>">
                <a class="link__city" href="/holiday-super" data-cookie="holidaySuper">
                  <div class="item__inner">
                    <img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_super.svg" alt="">
                  </div>
                </a>
              </li>
							<li class="item_3 <?=($page_a[1]=="planeta-holiday") ?'active':'';?>">
                <a class="link__city" href="/planeta-holiday" data-cookie="holidayPlanet"><div class="item__inner">
                    <img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_planet.svg" alt="">
                  </div>
                </a>
              </li>
							<li class="item_2 <?=($page_a[1]=="kora") ?'active':'';?>">
                <a class="link__city" href="/kora" data-cookie="kora">
                  <div class="item__inner">
                    <img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo_kopa.svg" alt="">
                  </div>
                </a>
              </li>
							<li class="item_1 <?=($page_a[1]=="") ?'active':'';?>">
                <a class="link__city" href="/" data-cookie="holidayClassic">
                  <div class="item__inner">
                    <img src="<?=$APPLICATION->GetTemplatePath("")?>img/logo.svg" alt="">
                  </div>
                </a>
              </li>

<script type="text/javascript">
  

  $('ul.stores li > a').click(function(e){
    


    // console.log($(this).data('cookie'));
    $.cookie('click', $(this).data('cookie'), { path: '/' });
    console.log($.cookie('click'));
  });

</script>
						