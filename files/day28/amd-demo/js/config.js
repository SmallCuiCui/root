// 配置每一个模块的短名称
// 将来使用这些模块的时候只需要先引入config，然后引入短名称就行
require.config({
  // 暂时写成盘符绝对路径
  baseUrl : "C:/1902/project/day28/amd-demo/",
  paths : {
    "a" : "js/a",
    "b" : "js/b"
  }

})