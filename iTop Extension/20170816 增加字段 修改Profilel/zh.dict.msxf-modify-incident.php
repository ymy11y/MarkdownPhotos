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

 // Class: Incident
 
Dict::Add('ZH CN', 'Chinese', '简体中文', array(

	'Class:Incident/Attribute:service3rdlevelcategory_id' => '解决原因',
	'Class:Incident/Attribute:service3rdlevelcategory_id+' => '',
	'Class:Incident/Attribute:troubleprod' => '故障原因所属产品线',
	'Class:Incident/Attribute:troubleprod+' => '',
	'Class:Incident/Attribute:troublereasonlevel1' => '故障1级分类',
	'Class:Incident/Attribute:troublereasonlevel1+' => '',
	'Class:Incident/Attribute:troublereasonlevel2' => '故障2级分类',
	'Class:Incident/Attribute:troublereasonlevel2+' => '',
	'Class:Incident/Attribute:impactprod' => '影响产品',
	'Class:Incident/Attribute:impactprod+' => '',
	'Class:Incident/Attribute:amountoflose' => '损失金额',
	'Class:Incident/Attribute:amountoflose+' => '',
    'Class:Incident/Attribute:incidence' => '影响范围',
    'Class:Incident/Attribute:incidence+' => '',
    'Class:Incident/Attribute:priority' => '优先级',
    'Class:Incident/Attribute:priority+' => '',
    'Class:Incident/Attribute:reasonanalysis' => '原因分析',
	'Class:Incident/Attribute:reasonanalysis+' => '',
    'Class:Incident/Attribute:time_spent' => '解决耗时',
    'Class:Incident/Attribute:time_spent+' => '',
	'Class:Incident/Attribute:troubleprod/Value:1ops' => '运维',
	'Class:Incident/Attribute:troubleprod/Value:1ops+' => '运维',
	'Class:Incident/Attribute:troubleprod/Value:2posloan' => '商品贷',
	'Class:Incident/Attribute:troubleprod/Value:2posloan+' => '商品贷',
	'Class:Incident/Attribute:troubleprod/Value:3cachloan' => '现金贷',
	'Class:Incident/Attribute:troubleprod/Value:3cachloan+' => '现金贷',
	'Class:Incident/Attribute:troubleprod/Value:4vcard' => '虚拟卡',
	'Class:Incident/Attribute:troubleprod/Value:4vcard+' => '虚拟卡',
	'Class:Incident/Attribute:troubleprod/Value:5publicplatform' => '公共平台',
	'Class:Incident/Attribute:troubleprod/Value:5publicplatform+' => '公共平台',
	'Class:Incident/Attribute:troubleprod/Value:6dataplatform' => '数据平台',
	'Class:Incident/Attribute:troubleprod/Value:6dataplatform+' => '数据平台',
	'Class:Incident/Attribute:troubleprod/Value:7riskcontrol' => '风控',
	'Class:Incident/Attribute:troubleprod/Value:7riskcontrol+' => '风控',
	'Class:Incident/Attribute:troubleprod/Value:8ccsaccount' => '长亮账务',
	'Class:Incident/Attribute:troubleprod/Value:8ccsaccount+' => '长亮账务',	
	'Class:Incident/Attribute:troubleprod/Value:9ggsaccount' => 'GG账务',
	'Class:Incident/Attribute:troubleprod/Value:9ggsaccount+' => 'GG账务',
	'Class:Incident/Attribute:troubleprod/Value:10activity' => '活动',
	'Class:Incident/Attribute:troubleprod/Value:10activity+' => '活动',
	'Class:Incident/Attribute:troubleprod/Value:11publicframework' => '公共框架',
	'Class:Incident/Attribute:troubleprod/Value:11publicframework+' => '公共框架',
	'Class:Incident/Attribute:troubleprod/Value:12callcenter' => '呼叫中心',
	'Class:Incident/Attribute:troubleprod/Value:12callcenter+' => '呼叫中心',
	'Class:Incident/Attribute:troubleprod/Value:13crmsystem' => 'CRM系统',
	'Class:Incident/Attribute:troubleprod/Value:13crmsystem+' => 'CRM系统',
	
	'Class:Incident/Attribute:troublereasonlevel1/Value:1ops_infra' => '1运维（基础架构）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:1ops_infra+' => '1运维（基础架构）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:2ops_business' => '2运维（业务）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:2ops_business+' => '2运维（业务）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:3app_dev' => '3应用（研发）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:3app_dev+' => '3应用（研发）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:4app_test' => '4应用（测试）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:4app_test+' => '4应用（测试）',
	'Class:Incident/Attribute:troublereasonlevel1/Value:5rulemodel' => '5规则模型',
	'Class:Incident/Attribute:troublereasonlevel1/Value:5rulemodel+' => '5规则模型',
	'Class:Incident/Attribute:troublereasonlevel1/Value:6thirdparty' => '6第三方原因',
	'Class:Incident/Attribute:troublereasonlevel1/Value:6thirdparty+' => '6第三方原因',
	'Class:Incident/Attribute:troublereasonlevel1/Value:7product' => '7产品部',
	'Class:Incident/Attribute:troublereasonlevel1/Value:7product+' => '7产品部',
	
	'Class:Incident/Attribute:troublereasonlevel2/Value:1humanerror' => '人为因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:1humanerror+' => '人为因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:2infra' => '基础组件因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:2infra+' => '基础组件因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:3external' => '外部因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:3external+' => '外部因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:4hardware' => '硬件因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:4hardware+' => '硬件因素',
	'Class:Incident/Attribute:troublereasonlevel2/Value:5performance' => '性能问题',
	'Class:Incident/Attribute:troublereasonlevel2/Value:5performance+' => '性能问题',
	'Class:Incident/Attribute:troublereasonlevel2/Value:6configuration' => '配置问题',
	'Class:Incident/Attribute:troublereasonlevel2/Value:6configuration+' => '配置问题',
	'Class:Incident/Attribute:troublereasonlevel2/Value:7bug' => '程序BUG',
	'Class:Incident/Attribute:troublereasonlevel2/Value:7bug+' => '程序BUG',
	'Class:Incident/Attribute:troublereasonlevel2/Value:8dataprocess' => '数据处理',
	'Class:Incident/Attribute:troublereasonlevel2/Value:8dataprocess+' => '数据处理',
	'Class:Incident/Attribute:impactstart_date' => '影响开始时间',
	'Class:Incident/Attribute:impactstart_date+' => '影响开始时间',
	'Class:Incident/Attribute:impactstop_date' => '影响结束时间',
	'Class:Incident/Attribute:impactstop_date+' => '影响结束时间',
	'Class:Incident/Attribute:issuehappen_date' => '发生时间点',
	'Class:Incident/Attribute:issuehappen_date+' => '发生时间点',
	
	'Class:Incident/Attribute:troublesource_list' => '故障源',
	'Class:Incident/Attribute:troublesource_list+' => '故障源',	
		
	'Class:Incident/Attribute:pending_reason' => '暂挂原因',
	'Class:Incident/Attribute:pending_reason+' => '',
	
	'Class:Incident/Attribute:existchange' => '是否有变更',
	'Class:Incident/Attribute:existchange+' => '',
	
	'Class:lnktroublesourceToIncident' => '故障源',
	'Class:lnktroublesourceToIncident+' => '',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod' => '故障源',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod+' => '',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1' => '故障1级分类',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1+' => '',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2' => '故障2级分类',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2+' => '',
	'Class:lnktroublesourceToIncident/Attribute:ticket_id' => '事件编号',
	'Class:lnktroublesourceToIncident/Attribute:ticket_id+' => '',
	'Class:lnktroublesourceToIncident/Attribute:reasontype' => '类型',
	'Class:lnktroublesourceToIncident/Attribute:reasontype+' => '',
	
		'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:1ops' => '运维',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:1ops+' => '运维',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:2posloan' => '商品贷',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:2posloan+' => '商品贷',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:3cachloan' => '现金贷',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:3cachloan+' => '现金贷',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:4vcard' => '虚拟卡',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:4vcard+' => '虚拟卡',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:5publicplatform' => '公共平台',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:5publicplatform+' => '公共平台',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:6dataplatform' => '数据平台',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:6dataplatform+' => '数据平台',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:7riskcontrol' => '风控',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:7riskcontrol+' => '风控',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:8ccsaccount' => '长亮账务',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:8ccsaccount+' => '长亮账务',	
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:9ggsaccount' => 'GG账务',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:9ggsaccount+' => 'GG账务',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:10activity' => '活动',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:10activity+' => '活动',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:11publicframework' => '公共框架',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:11publicframework+' => '公共框架',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:12callcenter' => '呼叫中心',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:12callcenter+' => '呼叫中心',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:13crmsystem' => 'CRM系统',
	'Class:lnktroublesourceToIncident/Attribute:troubleprod/Value:13crmsystem+' => 'CRM系统',
	
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:1ops_infra' => '1运维（基础架构）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:1ops_infra+' => '1运维（基础架构）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:2ops_business' => '2运维（业务）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:2ops_business+' => '2运维（业务）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:3app_dev' => '3应用（研发）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:3app_dev+' => '3应用（研发）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:4app_test' => '4应用（测试）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:4app_test+' => '4应用（测试）',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:5rulemodel' => '5规则模型',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:5rulemodel+' => '5规则模型',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:6thirdparty' => '6第三方原因',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:6thirdparty+' => '6第三方原因',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:7product' => '7产品部',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel1/Value:7product+' => '7产品部',
	
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:1humanerror' => '人为因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:1humanerror+' => '人为因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:2infra' => '基础组件因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:2infra+' => '基础组件因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:3external' => '外部因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:3external+' => '外部因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:4hardware' => '硬件因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:4hardware+' => '硬件因素',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:5performance' => '性能问题',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:5performance+' => '性能问题',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:6configuration' => '配置问题',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:6configuration+' => '配置问题',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:7bug' => '程序BUG',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:7bug+' => '程序BUG',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:8dataprocess' => '数据处理',
	'Class:lnktroublesourceToIncident/Attribute:troublereasonlevel2/Value:8dataprocess+' => '数据处理',
	'Class:lnktroublesourceToIncident/Attribute:impactstart_date' => '影响开始时间',
	'Class:lnktroublesourceToIncident/Attribute:impactstart_date+' => '影响开始时间',
	'Class:lnktroublesourceToIncident/Attribute:impactstop_date' => '影响结束时间',
	'Class:lnktroublesourceToIncident/Attribute:impactstop_date+' => '影响结束时间',
	
	'Class:lnktroublesourceToIncident/Attribute:reasontype/Value:primary' => '主要原因',
	'Class:lnktroublesourceToIncident/Attribute:reasontype/Value:primary+' => '',
	'Class:lnktroublesourceToIncident/Attribute:reasontype/Value:secondary' => '次要原因',
	'Class:lnktroublesourceToIncident/Attribute:reasontype/Value:secondary+' => '',
	
	'Menu:AllTroubleSource'=> '所有故障源',
	'Menu:AllTroubleSource+'=> '',

    'Class:Ticket/Attribute:team_id' => '处理团队',
    'Class:Ticket/Attribute:team_id+' => '',

    'Class:Ticket/Attribute:description' => '描述/调查处理',
    'Class:Ticket/Attribute:description+' => '',
	
	
	
));

