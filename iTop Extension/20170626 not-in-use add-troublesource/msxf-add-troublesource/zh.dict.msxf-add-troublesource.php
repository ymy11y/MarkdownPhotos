<?php
// Copyright (C) 2010-2014 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Localized data
 * @Maxima	maximaqiu@hotmail.com
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

 // Class: troublesource
 
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Class:troublesource' => '故障源产品线',
	'Class:troublesource+' => '',
	
	'Menu:TroubleSourceManagement' => '故障源管理',
	'Menu:TroubleSourceManagement+' => '故障源管理',
	'Menu:NewTroubleSource' => '新建故障源',
	'Menu:NewTroubleSource+' => '新建故障源',
	'Menu:AllTroubleSource' => '所有故障源',
	'Menu:AllTroubleSource+' => '所有故障源',

	'Class:troublesource/Attribute:name' => '故障源',
	'Class:troublesource/Attribute:name+' => '',
	'Class:troublesource/Attribute:troublereasonlevel1' => '故障一级分类',
	'Class:troublesource/Attribute:troublereasonlevel1+' => '',
	'Class:troublesource/Attribute:troublereasonlevel2' => '故障二级分类',
	'Class:troublesource/Attribute:troublereasonlevel2+' => '',
	'Class:troublesource/Attribute:reasontype' => '类型',
	'Class:troublesource/Attribute:reasontype+' => '',
	
	'Class:troublesource/Attribute:name/Value:1ops' => '运维',
	'Class:troublesource/Attribute:name/Value:1ops+' => '运维',
	'Class:troublesource/Attribute:name/Value:2posloan' => '商品贷',
	'Class:troublesource/Attribute:name/Value:2posloan+' => '商品贷',
	'Class:troublesource/Attribute:name/Value:3cachloan' => '现金贷',
	'Class:troublesource/Attribute:name/Value:3cachloan+' => '现金贷',
	'Class:troublesource/Attribute:name/Value:4vcard' => '虚拟卡',
	'Class:troublesource/Attribute:name/Value:4vcard+' => '虚拟卡',
	'Class:troublesource/Attribute:name/Value:5publicplatform' => '公共平台',
	'Class:troublesource/Attribute:name/Value:5publicplatform+' => '公共平台',
	'Class:troublesource/Attribute:name/Value:6dataplatform' => '数据平台',
	'Class:troublesource/Attribute:name/Value:6dataplatform+' => '数据平台',
	'Class:troublesource/Attribute:name/Value:7riskcontrol' => '风控',
	'Class:troublesource/Attribute:name/Value:7riskcontrol+' => '风控',
	'Class:troublesource/Attribute:name/Value:8ccsaccount' => '长亮账务',
	'Class:troublesource/Attribute:name/Value:8ccsaccount+' => '长亮账务',	
	'Class:troublesource/Attribute:name/Value:9ggsaccount' => 'GG账务',
	'Class:troublesource/Attribute:name/Value:9ggsaccount+' => 'GG账务',
	'Class:troublesource/Attribute:name/Value:10activity' => '活动',
	'Class:troublesource/Attribute:name/Value:10activity+' => '活动',
	'Class:troublesource/Attribute:name/Value:11publicframework' => '公共框架',
	'Class:troublesource/Attribute:name/Value:11publicframework+' => '公共框架',
	
	'Class:troublesource/Attribute:troublereasonlevel1/Value:1ops_infra' => '1运维（基础架构）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:1ops_infra+' => '1运维（基础架构）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:2ops_business' => '2运维（业务）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:2ops_business+' => '2运维（业务）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:3app_dev' => '3应用（研发）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:3app_dev+' => '3应用（研发）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:4app_test' => '4应用（测试）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:4app_test+' => '4应用（测试）',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:5rulemodel' => '5规则模型',
	'Class:troublesource/Attribute:troublereasonlevel1/Value:5rulemodel+' => '5规则模型',
	
	'Class:troublesource/Attribute:troublereasonlevel2/Value:1humanerror' => '人为因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:1humanerror+' => '人为因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:2infra' => '基础组件因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:2infra+' => '基础组件因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:3external' => '外部因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:3external+' => '外部因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:4hardware' => '硬件因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:4hardware+' => '硬件因素',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:5performance' => '性能问题',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:5performance+' => '性能问题',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:6configuration' => '配置问题',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:6configuration+' => '配置问题',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:7bug' => '程序BUG',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:7bug+' => '程序BUG',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:8dataprocess' => '数据处理',
	'Class:troublesource/Attribute:troublereasonlevel2/Value:8dataprocess+' => '数据处理',
	'Class:troublesource/Attribute:impactstart_date' => '影响开始时间',
	'Class:troublesource/Attribute:impactstart_date+' => '影响开始时间',
	'Class:troublesource/Attribute:impactstop_date' => '影响结束时间',
	'Class:troublesource/Attribute:impactstop_date+' => '影响结束时间',
	

	
	
));

