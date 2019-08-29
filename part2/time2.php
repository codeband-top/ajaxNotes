<?php 


header('Content-Type:application/json');

// echo json_encode(array
// 	'time' => time()
// ));

// =>{"time":153142321}

// echo 'foo({"time":153142321})';
// =>foo("time":15312321)

$json = json_encode(array(
	'time' => time()
));

// 在JSON格式的字符串外面包裹了一个函数的调用
// 返回的结果就变成了js代码
echo "foo({$json})";

 ?>
