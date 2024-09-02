<?php include_once "_init.php" ?>
<?php include_once "../layout/".$vpath."sub_header.html" ?>

<?php
	// 로그인중인 경우 회원가입 할 수 없습니다.
	if ($is_member) {
		goto_url(__URL);
	}

	if($naver_mail=="undefined"){
		alert("undefined 오류가 발생했습니다.PRE(".$naver_mail.')');die();
	}

	$query = "SELECT * FROM tb_user WHERE m_id='".$naver_mail."'";
	$res = sql_fetch($query);
	if($res['m_id']=="undefined"){
		alert("undefined 오류가 발생했습니다.(".$naver_mail.')');die();
	}
	if($res['m_id']==""){
		alert("NULL 오류가 발생했습니다.(".$naver_mail.')');die();
	}

	if($res){
		if($res["m_password"]!=""&&$res["org_id"] == $org_id){
			//등록된 아이디가 있으면 m_tempfilename을 업데이트 한다.
			$query="update tb_user set m_tempfilename='$naver_profile_image' where m_id='$naver_mail'";
			sql_query($query);
?>
			<script type="text/javascript">
			var id = '<?php echo $res['m_id'] ?>';
			var pwd = '<?php echo $res['m_password']?>';
			location.href="/StreamLine/index/login_auto.php?id="+id+"&pwd="+pwd
			</script>
<?php
		}else if($res["m_password"]!="" && $res['org_id']!=$org_id){
			alert("이미 가입된 사용자 입니다. 교육원으로 문의주시기 바랍니다.","/class/login.html");
		}else{
			alert("탈퇴하신 계정입니다. 관리자에게 문의하시기 바랍니다.","/class/login.html");
		}
	}





//	Dim chk : chk = trimReq("chk")
//	naver_name = trimReq("naver_name")
//	naver_mail = trimReq("naver_mail")

?>



<script type="text/javascript" language="javascript">
<!--
function directInputEmail()
{
	var frm = document.frmJoin;
	var strEmail = frm.slctEmail.options[frm.slctEmail.selectedIndex].value;

	frm.txtEmail2.value = strEmail;
	if(strEmail == ""){
		frm.txtEmail2.style.display = "inline";
	}else{
		frm.txtEmail2.style.display = "none";
	}
}

function join_ok(){
	var frm = document.frmJoin;
	if(frm.txtName.value == ""){
		alert("이름을 입력하세요.");
		frm.txtName.focus();
		return false;
	}if(frm.txtEmail1.value == "" && frm.txtEmail2.value == ""){
		alert("이메일 주소를 입력해주세요.");
		return false;
	}if(frm.txtHp2.value == "" || frm.txtHp3.value == ""){
		alert("연락처를 입력해주세요.");
		return false;
	}
	/*필수입력사항 체크*/
	frm.submit();
}

//-->
</script>
<style>
    #header .menu_wrap{border-bottom: 1px solid #ccc;}
	.kakaoLoginTit{width:740px; padding:20px 0; background:#ffeb00; font-size:15px; font-weight:500; color:#3c1e1e; text-align:center; box-sizing: border-box; margin:80px auto 0; font:bold 25px/1.2em "nanum gothic";}
	.kakaoLoginform{width:700px; background:white; padding:20px; border:1px solid #eee; margin:0 auto 20px;}
    .kakaoLoginform table{border-collapse:separate; border-spacing:30px; width:100%;}
    .kakaoLoginform td{text-align:left;}
	.kakaoLoginform th{width:120px; text-align:left; font:bold 17px/1.2em "nanum gothic"; border-right:1px solid #ddd; color:#333;}
	.kakaoLoginform td input[type=text]{height:23px; line-height:25px; vertical-align:middle; color:#777; font:bold 15px/1.2em "nanum gothic";}
	.bgcolbox01{background:#fffed7; border:1px solid 1px solid #ffcc00 !important; width:300px; padding:8px 10px; }
	.bgcolbox02{background:#fffed7; border:1px solid 1px solid #ffcc00 !important; width:125px; padding:8px 10px; }
	.bgcolbox03{background:#fff; border:1px solid #fff !important; width:89px; border-left:1px solid #ddd !important; padding:0px 10px; text-align:center;}
	.messWrap{display:block; padding:30px 10px 0;}
	.kakaoLoginform select{border:0; width:90px; font:bold 15px/1.2em "nanum gothic"; padding:0 20px;}
    .join_btn_ok{margin: 0 auto 80px; display: block; width: 400px; height: 60px; line-height: 60px; background: #ffd123; font-size: 20px; font-weight: 500; color: #fff; text-align: center;}
    
</style>

<div class="kakaoLoginTit">카카오톡 간편 가입</div>
<div class="kakaoLoginform">
    <table>
        <form name='frmJoin' method='post' action='kakao_join.php'>
		<input type="hidden" name="naver_name" value="<?php echo $naver_name?>">
		<input type="hidden" name="naver_mail" value="<?php echo $naver_mail ?>">
        <?php //Call getHiddens(Array("menu_num", "gm_num"), Array(trimReq("menu_num"),"")) ?>
        <input type='hidden' name='txtHpchk' value=''>
        <tr>
            <th>이름</th>
            <td><input type='text' name='txtName' value='<?php echo $naver_name?>' class='bgcolbox01' readonly></td>
        </tr>
        
        <tr>
            <th>이메일아이디</th>
            <td>
            	<?php
                    $naver_mail_arr = explode("@",$naver_mail);
                ?>
                <input type='text' name='txtEmail1' value='<?php echo $naver_mail_arr[0] ?>'  class='bgcolbox02' readonly>
                &nbsp;@&nbsp;
                <input type='text' name='txtEmail2' value='<?php echo $naver_mail_arr[1] ?>'  class='bgcolbox02' readonly>
            </td>
        </tr>
        
        <tr>
            <th>연락처</th>
            <td>
            	<div style="float:left; border:1px solid #ddd; padding:10px 0;">
                    <select name='slctHp1'>
                        <option value='010' selected>010</option>
                        <option value='011'>011</option>
                        <option value='016'>016</option>
                        <option value='017'>017</option>
                        <option value='018'>018</option>
                        <option value='019'>019</option>
                    </select>
                    <input type='text' name='txtHp2' maxlength='4' class='bgcolbox03' onKeyPress='return onlyNumInput();'value=''>
                    <input type='text' name='txtHp3' maxlength='4' class='bgcolbox03' onKeyPress='return onlyNumInput();' value=''> 
                </div>
                
            </td>
        </tr>
    </table>
    </form>
    <p style="float:left; margin-top:5px; margin-left:10px;"><font color='#FF6500'>＊</font>이동전화번호 기재시 교육정보 및 학습관련 SMS서비스 및 수강안내 전화를 제공합니다.</p>
    <div class="messWrap">
    <!--#include virtual="/Mingan/Include/agree_ment.inc"-->
    </div>
</div>
<div class="btnWrap"><a href='#' onclick='join_ok();' class="join_btn_ok">약관동의/가입하기</a></div>
        


</div>

</div>
</div>



<?php include_once "../layout/".$vpath."sub_footer.html" ?>
