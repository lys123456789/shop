<?php
// 连接数据库函数
function con()
{
    $link = mysqli_connect('localhost', 'root', 'root', 'shop', 3306);
    if (!$link) {
        die('数据库连接失败');
    }
    return $link;
}

// 非查询的封装
function query($sql)
{
    $link = con();
    $res = mysqli_query($link, $sql);

    if ($res) {
        return 1;
    } else {
        return 2;
    }
}

// 查询的封装
function select($sql)
{
    $link = con();
    $res = mysqli_query($link, $sql);
    $arr = [];

    // 遍历结果集合
    while ($row = mysqli_fetch_assoc($res)) {
        $arr[] = $row;
    }
    mysqli_close($link);

    return $arr;

}
