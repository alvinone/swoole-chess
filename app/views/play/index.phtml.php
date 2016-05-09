<?php echo $this->partial('public/header'); ?>
<title>Swoole中国象棋 - 大厅</title>
    <link href="<?php echo $this->url->getStatic('public/css/index.css'); ?>" rel="stylesheet">
    <style type="text/css">
        object,  embed {-webkit-animation-duration: .001s;-webkit-animation-name: playerInserted;-ms-animation-duration: .001s;-ms-animation-name: playerInserted;-o-animation-duration: .001s;-o-animation-name: playerInserted;animation-duration: .001s;animation-name: playerInserted;  }
  		@-webkit-keyframes playerInserted {from {opacity: 0.99;}to {opacity: 1;}  }
  		@-ms-keyframes playerInserted {from {opacity: 0.99;}to {opacity: 1;}  }
  		@-o-keyframes playerInserted {from {opacity: 0.99;}to {opacity: 1;}  }
  		@keyframes playerInserted {from {opacity: 0.99;}to {opacity: 1;}  }
		.datagrid-cell-c3-roomId {width: 72px}.datagrid-cell-c3-roomType {width: 72px}.datagrid-cell-c3-roomPeps {width: auto}.datagrid-cell-c3-white {width: 281px}.datagrid-cell-c3-black {width: 281px}.datagrid-cell-c3-blackQl {width: auto}.datagrid-cell-c3-whiteQl {width: auto}.datagrid-cell-c3-rz {width: auto}.datagrid-cell-c3-zcr {width: auto}.datagrid-cell-c3-jg {width: auto}.datagrid-cell-c3-Dtype {width: auto}.datagrid-cell-c3-isYF {width: auto}.datagrid-cell-c3-status {width: 153px}.datagrid-cell-c3-pops {width: 254px}.datagrid-cell-c3-options {width: 142px}.datagrid-cell-c4-USERNAME {width: auto}.datagrid-cell-c4-USERPORTRAIT {width: auto}.datagrid-cell-c4-QIYOUHUI {width: auto}.datagrid-cell-c4-USERNIKE {width: 100px}.datagrid-cell-c4-QILI {width: 55px}.datagrid-cell-c4-DIQU {width: auto}.datagrid-cell-c4-USERPOINT {width: 55px}.datagrid-cell-c4-WINNUM {width: 100px}.datagrid-cell-c4-LOSENUM {width: 100px}.datagrid-cell-c4-STATUS {width: 192px}.datagrid-cell-c4-YAOQING {width: 39px}.datagrid-cell-c4-options {width: 84px}
	</style>
	<style id="style-1-cropbar-clipper">
        .en-markup-crop-options {top: 18px !important;left: 50% !important;margin-left: -100px !important;width: 200px !important;border: 2px rgba(255, 255, 255, .38) solid !important;border-radius: 4px !important;}.en-markup-crop-options div div:first-of-type {margin-left: 0px !important;}
    </style>
</head>
<body>
<div class="head">
    <a class="head-user;" href="#" style="float:right;" onclick="doLogout();"><div id="userNick" class="userNike">退出</div></a>
    <a class="head-menu"><span>JunStar</span></a>
    <a class="head-user" href="<?php echo $this->url->get('play/create'); ?>"><div id="userNick" class="userNike">创建对局室</div></a>
</div>
<div class="contents">
    <div id="Dt" class="easyui-layout layout easyui-fluid" style="width: 1440px; height: 628px;">
        <div class="panel layout-panel layout-panel-east layout-split-east easyui-fluid" style="width: 504px; left: 936px; top: 0px;">
            <div class="panel-header" style="width: 499px;">
                <div class="panel-title panel-with-icon">在线用户数:<span id="online_users_count"><?php echo $this->length($arr_online_users); ?></span></div>
                <div class="panel-icon icon-users"></div>
                <div class="panel-tool">
                    <a class="panel-tool-collapse" href="javascript:void(0)" style="display: none;"></a>
                    <a href="javascript:void(0)" class="layout-button-right"></a>
                </div>
            </div>
            <div data-options="region:&#39;east&#39;,split:true,title:&#39;在线用户列表&#39;,iconCls:&#39;icon-users&#39;" style="width: 499px; height: 600px;" title="" class="panel-body layout-body panel-noscroll">
                <div id="rightLayout" class="easyui-layout layout easyui-fluid" data-options="fit:true" style="width: 497px; height: 599px;">
                    <div class="panel datagrid easyui-fluid" style="width: 495px;">
                        <div class="datagrid-wrap panel-body panel-body-noheader panel-body-noborder" title="" style="width: 495px; height: 599px;">
                            <div class="datagrid-view" style="width: 495px; height: 599px;">
                                <div class="datagrid-view1" style="width: 0px;">
                                    <div class="datagrid-header" style="width: 0px; height: 19px;">
                                        <div class="datagrid-header-inner" style="display: block;">
                                            <table class="datagrid-htable" border="0" cellspacing="0" cellpadding="0" style="height: 19px;">
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="datagrid-view2" style="width: 495px;">
                                    <div class="datagrid-header" style="width: 495px; height: 19px;">
                                        <div class="datagrid-header-inner" style="display: block;">
                                            <table class="datagrid-htable" border="0" cellspacing="0" cellpadding="0" style="height: 19px;">
                                                <tbody>
                                                    <tr class="datagrid-header-row">
                                                        <td field="USERNIKE">
                                                            <div class="datagrid-cell datagrid-cell-c4-USERNIKE" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_user">用户</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="WINNUM">
                                                            <div class="datagrid-cell datagrid-cell-c4-WINNUM" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_winNum">胜</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="LOSENUM">
                                                            <div class="datagrid-cell datagrid-cell-c4-LOSENUM" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_loseNum" sortable="true">负</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="STATUS">
                                                            <div class="datagrid-cell datagrid-cell-c4-STATUS" style="text-align: center;">
                                                                <span>
                                                                    <span data-18nkey="str_state" data-is18n="true">状态</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="datagrid-body" style="width: 495px; margin-top: 0px; height: 599px; overflow-x: hidden;">
                                        <div class="datagrid-btable-top" style="height: 0px;"></div>
                                        <table class="datagrid-btable" cellspacing="0" cellpadding="0" border="0" style="table-layout: auto;">
                                            <tbody id="user_list">
                                                <?php foreach ($arr_online_users as $user) { ?>
                                                <tr id="user_<?php echo $user['user_id']; ?>" datagrid-row-index="0" class="datagrid-row">
                                                    <td field="USERNIKE">
                                                        <div style="text-align:left;height:auto;" class="datagrid-cell datagrid-cell-c4-USERNIKE">
                                                            <div style="line-height:22px;float:left;width:100%;" title="JunStar">
                                                                <!-- <img style="height:21px;width:20px;padding-bottom:1px;" src="<?php echo $this->url->getStatic('public/img/man.png'); ?>"> --><?php echo $user['user_name']; ?></div>
                                                        </div>
                                                    </td>
                                                    <td field="WINNUM">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c4-WINNUM">暂未统计</div>
                                                    </td>
                                                    <td field="LOSENUM">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c4-LOSENUM">暂未统计</div>
                                                    </td>
                                                    <td field="STATUS">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c4-STATUS"><?php echo $user['status_text']; ?></div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel layout-panel layout-panel-center" style="width: 936px; left: 0px; top: 0px;">
            <div data-options="region:&#39;center&#39;" title="" class="panel-body panel-body-noheader layout-body panel-noscroll" style="width: 936px; height: 628px;">
                <div data-options="fit:true" style="width: 934px; height: 626px;">
                    <div class="datagrid easyui-fluid" style="width: 932px;">
                        <div class="datagrid-wrap panel-body panel-body-noheader panel-body-noborder" title="" style="width: 932px; height: 626px;">
                            <div id="DjsToolBar" class="DjsToolBar datagrid-toolbar">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon-dt" style="width:18px;height:18px;position:absolute;"></div>
                                        <span id="djsTitle" style="font-weight:bold;padding-left:19px;font-size:13px;line-height:18px;">对局室个数:<span id="playing_room_count"><?php echo $this->length($playing_list); ?></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="datagrid-view" style="width: 932px; height: 626px;">
                                <div class="datagrid-view2" style="width: 932px;">
                                    <div class="datagrid-header" style="width: 932px; height: 19px;">
                                        <div class="datagrid-header-inner" style="display: block;">
                                            <table class="datagrid-htable" border="0" cellspacing="0" cellpadding="0" style="height: 19px;">
                                                <tbody>
                                                    <tr class="datagrid-header-row">
                                                        <td field="roomId">
                                                            <div class="datagrid-cell datagrid-cell-c3-roomId" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_roomID">房间号</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="white">
                                                            <div class="datagrid-cell datagrid-cell-c3-white" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_playerWhite">红</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="black">
                                                            <div class="datagrid-cell datagrid-cell-c3-black" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_playerBlack">黑</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="status">
                                                            <div class="datagrid-cell datagrid-cell-c3-status" style="text-align: center;">
                                                                <span>
                                                                    <span data-18nkey="str_state" data-is18n="true">状态</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                        <td field="options">
                                                            <div class="datagrid-cell datagrid-cell-c3-options" style="text-align: center;">
                                                                <span>
                                                                    <span data-is18n="true" data-18nkey="str_operate">操作</span>
                                                                </span>
                                                                <span class="datagrid-sort-icon">&nbsp;</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="datagrid-body" style="width: 932px; margin-top: 0px; height: 626px; overflow-x: hidden;">
                                        <div class="datagrid-btable-top" style="height: 0px;"></div>
                                        <table class="datagrid-btable" cellspacing="0" cellpadding="0" border="0" style="table-layout: auto;">
                                            <tbody id="room_list">
                                                <?php foreach ($playing_list as $playing) { ?>
                                                <tr id="room_<?php echo $playing['playing_id']; ?>" datagrid-row-index="0" class="datagrid-row">
                                                    <td field="roomId">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c3-roomId">
                                                            <div style="line-height:22px;float:left;width:100%;"><?php echo $playing['playing_id']; ?></div>
                                                        </div>
                                                    </td>
                                                    <td field="white">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c3-white"><?php echo $playing['red']['user_name']; ?></div>
                                                    </td>
                                                    <td field="black">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c3-black"><?php echo $playing['black']['user_name']; ?></div>
                                                    </td>
                                                    <td field="status" style="color:#0072c1;">
                                                        <?php if ($playing['red']['user_id'] > 0 && $playing['black']['user_id'] > 0) { ?>
                                                        <div style="color:#0072c1;;text-align:center;;height:auto;" class="datagrid-cell datagrid-cell-c3-status">游戏中</div>
                                                        <?php } else { ?>
                                                        <div style="color:#0072c1;;text-align:center;;height:auto;" class="datagrid-cell datagrid-cell-c3-status">等待中</div>
                                                        <?php } ?>
                                                    </td>
                                                    <td field="options">
                                                        <div style="text-align:center;height:auto;" class="datagrid-cell datagrid-cell-c3-options">
                                                            <div class="btn-group">
                                                                <?php if ($playing['red']['user_id'] > 0 && $playing['black']['user_id'] > 0) { ?>
                                                                暂无
                                                                <?php } else { ?>
                                                                <button class="btn2 btn2-primary btn2-xs" style="color:brown;" onclick="location.href='<?php echo $this->url->get('play/chess/'.$playing['playing_id']); ?>'">加入游戏</button>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo $this->url->getStatic('public/js/jquery-1.8.2.min.js'); ?>"></script>
<script src="<?php echo $this->url->getStatic('public/js/jquery.json.js'); ?>"></script>
<script>
var SITE_URL 		= 	"<?php echo 'http://'.$_SERVER['HTTP_HOST'] ?>";
var user_info		=	eval(<?php echo $user_info; ?>);
</script>
<script src="<?php echo $this->url->getStatic('public/js/datingwebsocket.js'); ?>"></script>
</body>
</html>
