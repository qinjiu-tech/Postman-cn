<?php

return array_merge(
    [
        '______' => '______',
        '______' => '______',
        '______' => '______',

        "______" => "______",
        "______" => "______",
        "______" => "______",
    ],
    [
        "'Naming requests'" => "'命名请求'",
        "'Determines how the requests inside the generated collection will be named.'" => "'确定如何命名所生成集合中的请求.'",
        "' If “Fallback” is selected, the request will be named after one of the following schema'" => "'如果选择“Fallback”, 则请求将以以下架构之一命名'",
        "' values: `description`, `operationid`, `url`.'" => "'\\n值: `description`, `operationid`, `url`.'",
        "'Set indent character'" => "'设置缩进字符'",
        "'Option for setting indentation character'" => "'设置缩进字符的选项'",
        "'Collapse redundant folders'" => "'折叠冗余文件夹'",
        "'Importing will collapse all folders that have only one child element and lack '" => "'导入将折叠只有一个子元素并且缺少持久性文件夹级'",
        "'persistent folder-level data.'" => "'数据的所有文件夹.'",
        "'Importing will collapse all folders that have only one child element and'" => "'导入将折叠只有一个子元素并且缺少持久性文件夹级'",
        "' lack persistent folder-level data.'" => "'数据的所有文件夹'",
        "'Optimize conversion'" => "'优化转换'",
        "'Optimizes conversion for large specification, disabling this option might affect'" => "'针对大型规格优化转换, 禁用此选项可能'",
        "' the performance of conversion.'" => "'会影响转换性能.'",
        "'Request parameter generation'" => "'请求参数生成'",
        "'Select whether to generate the request parameters based on the'" => "'选择是否基于请求生成请求参数在'",
        "' [schema](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#schemaObject) or the'" => "' [架构](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#schemaObject) 或'",
        "' [example](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#exampleObject)'" => "' [示例](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/3.0.2.md#exampleObject)'",
        "' [schema](https://github.com/raml-org/raml-spec/blob/master/versions/raml-10/raml-10.md#type-declarations)'" => "' [架构](https://github.com/raml-org/raml-spec/blob/master/versions/raml-10/raml-10.md#type-declarations)'",
        "' or the [example]'" => "' 或 [示例]'",
        "' [schema](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#schemaObject) or the'" => "' [架构](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#schemaObject) 或'",
        "' [example](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#exampleObject)'" => "' [示例](https://github.com/OAI/OpenAPI-Specification/blob/master/versions/2.0.md#exampleObject)'",
        "' in the schema.'" => "'在架构中.'",
        "'Response parameter generation'" => "'响应参数生成'",
        "'Select whether to generate the response parameters based on the'" => "'选择是否基于参数生成响应参数在'",
        "'Folder organization'" => "'文件夹结构'",

        "'Select whether to create folders according to the spec’s paths or tags.'" => "'选择是否根据规范的路径或标签创建文件夹.'",
        "'Enable Schema Faking'" => "'启用架构伪造'",
        "'Whether or not schemas should be faked.'" => "'架构是否应该被伪造.'",
        "'Include auth info in example requests'" => "'在示例请求中包括认证信息'",
        "'Select whether to include authentication parameters in the example request'" => "'选择是否在示例请求中包括身份验证参数'",
        "'Short error messages during request <> schema validation'" => "'请求 <> 架构验证期间的简短错误消息'",
        "'Whether detailed error messages are required for request <> schema validation operations.'" => "'请求 <> 模式验证操作是否需要详细的错误消息.'",
        "'Properties to ignore during validation'" => "'验证期间要忽略的属性'",
        "'Specific properties (parts of a request/response pair) to ignore during validation.'" => "'验证期间要忽略的特定属性(请求/响应对的一部分).'",
        "' Must be sent as an array of strings. Valid inputs in the array: PATHVARIABLE, QUERYPARAM,'" => "'必须作为字符串数组发送. 数组中的有效输入: PATHVARIABLE, QUERYPARAM,'",
        "'Whether MISSING_IN_SCHEMA mismatches should be returned'" => "'是否不匹配应该返回 MISSING_IN_SCHEMA'",
        "'MISSING_IN_SCHEMA indicates that an extra parameter was included in the request. For most '" => "'MISSING_IN_SCHEMA 指示请求中包含一个额外的参数. 对于'",
        "'use cases, this need not be considered an error.'" => "'大多数用例,不必将其视为错误.'",
        "'Show detailed body validation messages'" => "'显示详细的正文验证消息'",
        "'Determines whether to show detailed mismatch information for application/json content '" => "'确定是否显示 application/json 内容的详细不匹配信息'",
        "'in the request/response body.'" => "'在请求/响应正文中.'",
        "'Suggest fixes if available'" => "'建议修复(如果可用)'",
        "'Whether to provide fixes for patching corresponding mismatches.'" => "'是否提供修补程序以修补相应的不匹配项.'",
        "'Show Metadata validation messages'" => "'显示元数据验证消息'",
        "'Whether to show mismatches for incorrect name and description of request'" => "'是否为不正确的名称和请求描述显示不匹配项'",
        "'Ignore mismatch for unresolved postman variables'" => "'忽略未解决的postman变量的不匹配'",
        "'Whether to ignore mismatches resulting from unresolved variables in the Postman request'" => "'是否忽略Postman请求中未解决的变量导致的不匹配'",
        "'Enable strict request matching'" => "'启用严格的请求匹配'",
        "'Whether requests should be strictly matched with schema operations. Setting to true will not '" => "'求是否应与架构操作严格匹配. 设置为 true 将不'",
        "'include any matches where the URL path segments don\\'t match exactly.'" => "'包括URL路径段不完全匹配的任何匹配项.'",
        "'Disable optional parameters'" => "'禁用可选参数'",
        "'Whether to set optional parameters as disabled'" => "'是否将可选参数设置为禁用'",
        "'Schema'" => "'架构'",
        "'Example'" => "'示例'",
        "'Fallback'" => "'Fallback'",
        "'Schema resolution nesting limit'" => "'架构解析嵌套限制'",
        "'Number of nesting limit till which schema resolution will happen. Increasing this limit may'" => "'直到架构解析发生的嵌套限制数. 增加此限制可能'",
        "' result in more time to convert collection depending on complexity of specification. (To make sure this'" => "'根据规范的复杂性, 有更多时间来转换集合. (为了确保此'",
        "' option works correctly \"optimizeConversion\" option needs to be disabled)'" => "'选项正常工作, 需要禁用\"optimizeConversion\"选项)'",
        "'______'" => "'______'",
        "'______'" => "'______'",
        "'______'" => "'______'",

    ],
    [
        '"______"' => '"______"',
        '"______"' => '"______"',
        '"______"' => '"______"',
        '"______"' => '"______"',
        '"______"' => '"______"',
        '"______"' => '"______"',
    ]
);

