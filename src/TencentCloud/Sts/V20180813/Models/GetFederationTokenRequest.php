<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取调用方英文名称，由字母组成。
 * @method void setName(string $Name) 设置调用方英文名称，由字母组成。
 * @method string getPolicy() 获取策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
 * @method void setPolicy(string $Policy) 设置策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒。
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒。
 */

/**
 *GetFederationToken请求参数结构体
 */
class GetFederationTokenRequest extends AbstractModel
{
    /**
     * @var string 调用方英文名称，由字母组成。
     */
    public $Name;

    /**
     * @var string 策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
     */
    public $Policy;

    /**
     * @var integer 指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒。
     */
    public $DurationSeconds;
    /**
     * @param string $Name 调用方英文名称，由字母组成。
     * @param string $Policy 策略描述
注意：
1、policy 需要做 urlencode（如果通过 GET 方法请求云 API，发送请求前，所有参数都需要按照云 API 规范再 urlencode 一次）。
2、策略语法参照 CAM 策略语法。
3、策略中不能包含 principal 元素。
     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒，默认1800秒，最长可设定有效期为7200秒。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
