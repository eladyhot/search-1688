<?php
header('Content-Type: text/html; charset=UTF-8');

// 获取关键词
$keyword = isset($_GET['q']) ? $_GET['q'] : '';

if ($keyword) {
    // 将UTF-8转换为GBK编码
    $keyword = iconv('UTF-8', 'GBK', urldecode($keyword));
    
    // URL编码
    $encoded = urlencode($keyword);
    
    // 构建URL
    $url = "https://s.1688.com/selloffer/offer_search.htm?keywords=" . $encoded;
} else {
    // 没有关键词时跳转到1688首页
    $url = "https://www.1688.com/";
}

// 跳转
header("Location: " . $url);
exit;
?>
