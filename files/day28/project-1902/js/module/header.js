// 定义header模块的时候就要依赖tools模块，可以直接传进来
define(["tools"], (tools) => {
  class Header {
    constructor () {
      // 规定，头部容器都是 <header></header>标签
      this.container = document.querySelector("header");
      this.load();
      
    }

    load () {
      // 加载header.html
      // 暂时写法，写成绝对路径  C:\1902\project\day28\project-1902\html\module\header.html
      tools.ajaxGetPromise("html/module/header.html", null, false).then(html => {
        this.container.innerHTML = html;
        // 数据返回，header加载结束以后才能运行交互
        this.nav();
      })
    }

    nav () {
      this.container.querySelector("p").onclick = function () {
        alert(this.innerHTML);
      }
    }


  }
  return new Header();
});