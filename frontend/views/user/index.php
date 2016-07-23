<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
$this->title = '记账';
?>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">欠账人姓名</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text"  placeholder="请输入姓名"/>
            </div>
        </div>
        <div class="weui_cell weui_vcode">
            <div class="weui_cell_hd"><label class="weui_label">欠账金额</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="number" pattern="[0-9]*" placeholder="请输入金额"/>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">欠账日期</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="date"  placeholder="请输入日期"/>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">欠账原由</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" type="text"  placeholder="请输入原由"/>
            </div>
        </div>

		<div class="weui_cell">
		    <div class="weui_cell_hd"><label class="weui_label">欠账明细</label></div>
		    <div class="weui_cell_bd weui_cell_primary">
		        <input class="weui_input" type="text"  placeholder="请输入明细"/>
		    </div>
		</div>
		<div class="weui_cell">
		    <div class="weui_cell_hd"><label class="weui_label">欠账人电话</label></div>
		    <div class="weui_cell_bd weui_cell_primary">
		        <input class="weui_input" type="number" pattern="[0-9]*" placeholder="请输入电话"/>
		    </div>
		</div>
		<div class="weui_cell">
		    <div class="weui_cell_hd"><label class="weui_label">还款日期</label></div>
		    <div class="weui_cell_bd weui_cell_primary">
		        <input class="weui_input" type="date"  placeholder="请输入电话"/>
		    </div>
		</div>
    </div>

    <div class="weui_cells_tips">底部说明文字底部说明文字</div>
    <div class="weui_btn_area">
        <a class="weui_btn weui_btn_primary" href="javascript:" id="showTooltips">确定</a>
    </div>
