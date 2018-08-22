<!DOCTYPE html>
<html>
<head>
	<title>Undangan</title>
	<style type="text/css">
		.label {
		    margin: 0;
		    padding: 10px 10px 16px 10px;
		    width: 842px;
		    border: 1px solid;
		}
		.label li {
		    margin: 16px 12px;
		    list-style: none;
		    display: inline-block;
		    border: 2px solid;
		    border-radius: 10px;
		    width: 230px;
		    height: 100px;
		    text-align: center;
		    font-size: 16px;
		    font-weight: bold;
		    line-height: 3;
		}
	</style>
</head>
<body style="margin:0">
<ul class="label">
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
	<li>6</li>
	<li>7</li>
	<li>8</li>
	<li>9</li>
	<li>10</li>
	<li>11</li>
	<li>12</li>
</ul>

<!-- ctrp+p A4 margin:0 -->
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	var label = [['SUHARTONO / SUNARTI', 'JLN JERUK RT 01'],['MARSIH', 'JLN DUREN RT 01'],['SALEH / SUPARTI', 'JLN DUREN RT 01'],['WIYOTO / SULIPAH', 'JLN DUREN RT 01'],['PANUT / MARKI', 'JLN DUREN RT 01'],['SUKIRAN / SRI PAMUJIANI', 'JLN DUREN RT 01'],['KHOMSUL ARIFAH', 'JLN JERUK RT 01'],['MUHYIDIN / UMI KULSUM', 'JLN JERUK RT 01'],['PARDI / TIKAH', 'JLN JERUK RT 01'],['BAKIR SANTOSO / PARIYEM', 'JLN MANGGA RT 01'],['SUMADI  / NINUK SUPINAH', 'JLN MANGGA RT 01'],['HAMDANI / SITI ZUHROTI', 'JLN JERUK RT 02'],['DA\'IMAM / TRI YULIANTI', 'JLN JERUK RT 02'],['NURICKWAN / ISTRINI', 'JLN JERUK RT 02']];
	var label230818 = [
		['SUNADI','KEDUNGGUWO'],
		['SUKARNI','KEDUNGGUWO'],
		['JAMAN','KEDUNGGUWO'],
		['SUWAR','KEDUNGGUWO'],
		['SUJOKO','KEDUNGGUWO'],
		['SUBARI','KEDUNGGUWO'],
		['SRI NINO','KEDUNGGUWO'],
		['SUMINO','KEDUNGGUWO'],
		['KASAN','KEDUNGGUWO'],
		['SUYATNO','KEDUNGGUWO'],
		['MUKMIN','KEDUNGGUWO'],
		['SUMANTO','KEDUNGGUWO'],
		
		['SUYADI','KEDUNGGUWO'],
		['SRIATUN','KEDUNGGUWO'],
		['SLAMET','SUKOMORO'],
		['SEMIN','SUKOMORO'],
		['SUMADI','SUKOMORO'],
		['KRISTIN / RUDI PRASETYO','JL. NANGKA RT 17'],
		['PURWANTO','TINAP'],
		['JOKO','POJOKSARI'],
		['SUYONO','KEMBANGAN'],
		['SARBIN','KEMBANGAN'],
		['SLAMET','SUMBER'],
		['SUYITNO','MALANG'],
		
		['B. BADAR','DS MALANG'],
		['PAIMIN SOPIR','BOGOREJO - MBARAT'],
		['SUYATI / PANIRAN','BK. BERAS GOMBEL'],
		['JISLISTIYANI / TAFSIRUL ANAM','GAMBIRAN'],
		['DJUMADI','KEMBANGAN'],
		['NYAMAN','KLEDOKAN'],
		['BIRAN / LAMI','KLEDOKAN'],
		['YAHNEM','KLEDOKAN'],
		['NINIK','KLEDOKAN'],
		['TINI BK. SAYUR','KLECO'],
		['JARI (TI)','KLECO'],
		['MARGONO / BIBIT PORWATI','JL. JAMBU RT 17'],
		
		['SUMINAH','JL. DUREN RT 02 / RW 01'],
		['WATINI','JL. PUNDUNG RT 11'],
		['PURWANTO / SURATIN KASANAH','JL. MANGGIS RT 12'],
		['NARDI / WATI','JL. JAMBU RT 14'],
		['SUWARTI','JL. NANGKA RT 14'],
		['PURWANTO / DARMI','JL. MANGGIS RT 16'],
		['B. Dra TITIK (IBUKE MB. DEVI)','GERIH KEC. GENENG'],
		['WITO','SIWALAN - WIDODAREN'],
		['SURADI / WAR','TEMENGGUNGAN'],
		['SUPARIYANTO / DIAN A.W.','RT 17 GULUN'],
		['GATOT SUPARIYANTO / MARIANI','JL JAMBU RT 18 GULUN'],
		['GINEM','JL JAMBU RT 18 GULUN'],

		['SUPARTI','JL JAMBU RT 18 GULUN'],
		['DARWAN / SUPARMI','JL DUKU RT 05'],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
		['',''],
	];
	jQuery(document).ready(function(){
		jQuery('.label li').map(function(i, b){
			jQuery(b).html(label[i][0]+"<br>"+label[i][1]);
		})
	});
</script>
</body>
</html>