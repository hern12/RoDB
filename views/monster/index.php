<?php 
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Monsters';
$this->params['breadcrumbs'][] = $this->title;
 ?>

<div class="row">
	<div class="col-md-12">
		<div class="txtHead">	
			<a href="javascript:void(0)" class="listTxt">A</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">B</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">C</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">D</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">E</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">F</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">G</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">H</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">I</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">J</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">K</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">L</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">M</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">N</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">O</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">P</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">Q</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">R</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">S</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">T</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">U</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">V</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">W</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">X</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">Y</a>
			<p class="listTxt1">|</p>
			<a href="javascript:void(0)" class="listTxt">Z</a>
		</div>
		<div class="monDetail">

		</div>
		<div class="loader"></div>

	</div>
</div>
<script type="text/javascript">
	$(".loader").hide();
	requestData();

	$('.listTxt').on("click",function(){
		$(".monDetail").children().remove();
		$(".monDetail").css("height",'500px');
		$(".loader").show();
		$.get( "./monsterd", { monster_name: $(this).text() } )
		.done(function( data ) {
		  if(data.length == 0){
		  	  alert("ไม่มีข้อมูลมอนเตอร์");
		  }else{
			  createTable(data,creatPagination);
			  $(".monDetail").css("height",'auto');
			  $(".loader").hide(); 
		  }
		});

	});

	function requestData(){
		$(".loader").show();
		$.get( "./monsterd", { monster_name: "A" })
		.done(function( data ) {
		  createTable(data,creatPagination);
		  $(".loader").hide();
		});

	}


	function genElement(){

		var createTable = "<div id=tbClone class=table-responsive><table class='table table-bordered'><tr><th colspan='4' width=500 height=50 valgin=middle><strong>RoDB-[TH]</strong></th></tr><tr><td><h4 class='headmid'>ชื่อ</h4></td><td><h4 id=monname></h4></td><td align=center colspan=2><img class=imgMon id=monImage src></td></tr><tr><td><h4 id=headhp></h4></td><td><h4 id=hp></h4><td><h4 id='headType'></h4></td><td><h4 id='type'></h4></td></tr><tr><td><h4 id=headprop></h4></td><td><h4 id=prop></h4></td><td><h4 id='headsize'></h4></td><td><h4 id='size'></h4></td></tr><tr><td><h4 id=headbaseExp></h4></td><td><h4 id=baseExp></td><td><h4 id='headbaseJob'></h4></td><td><h4 id='baseJob'></h4></td></tr></table></div>"
		return createTable;
	}
	function createTable(data,callback){
		var creTable = genElement();
		for(var i = 0; i<data.length; i++){
			$(".monDetail").append(creTable);

			$("#monImage").attr('id',"monImage"+i);
			$("#monImage"+i).attr('src',"../"+data[i].images);

			$("#monname").attr("id","monname"+i);
			$("#monname"+i).text(data[i].monster_name);

			$("#headhp").attr("id","headhp"+i);
			$("#hp").attr("id","hp"+i);
			$("#headhp"+i).text("เลือด");
			$("#hp"+i).text(data[i].monster_hp)

			$("#headType").attr("id","headType"+i);
			$("#type").attr("id","type"+i);
			$("#headType"+i).text("ชนิด");
			$("#type"+i).text(data[i].monster_race);

			$("#headprop").attr('id','headprop'+i);
			$("#prop").attr('id',"prop"+i);
			$("#headprop"+i).text("ธาตุ");
			$("#prop"+i).text(data[i].monster_property);

			$("#headsize").attr("id","headSize"+i);
			$("#size").attr('id',"size"+i);
			$("#headSize"+i).text("ขนาด");
			$("#size"+i).text(data[i].monster_size);

			$("#headbaseExp").attr("id","headbaseExp"+i);
			$("#baseExp").attr('id',"baseExp"+i);
			$("#headbaseExp"+i).text("Base Exp");
			$("#baseExp"+i).text(data[i].monster_base_exp);

			$("#headbaseJob").attr('id','headbaseJob'+i);
			$("#baseJob").attr('id',"baseJob"+i);
			$("#headbaseJob"+i).text("Base Job");
			$("#baseJob"+i).text(data[i].monster_job_exp);
		}
		callback();
	}

	function creatPagination(){
		$(".monDetail").quickPagination({pageSize:"10"});
	}

	$(function () {
	  $.scrollUp({
	    scrollName: 'scrollUp', // Element ID
	    topDistance: '300', // Distance from top before showing element (px)
	    topSpeed: 300, // Speed back to top (ms)
	    animation: 'fade', // Fade, slide, none
	    animationInSpeed: 200, // Animation in speed (ms)
	    animationOutSpeed: 200, // Animation out speed (ms)
	    scrollText: '', // Text for element
	    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	  });
	});
	
</script>