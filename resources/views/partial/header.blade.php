<div class="w-screen overflow-hidden ">
    <nav class="flex items-center justify-between text-center flex-wrap bg-red-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
            <span class="font-semibold text-xl tracking-tight text-3xl">M&M </span>
        </div>
        <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
        </div>
        <div class="text-sm lg:flex-grow float-left text-2xl">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-8">
                Trang chủ
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-8">
                Thực đơn
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-8">
                Cửa hàng
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-8">
                Liên hệ
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-8">
                Giới thiệu
            </a>
        </div>
        <div class = "float-lef text-2x1">
            <a href = "#"><i class="far fa-user mr-2 hover:text-white m-auto text-xl" onclick="openForm()"> Sigin</i>
                
        </a>
        
        </div>
    </nav>
</div>
<form action="/postLog" method="post">
        {{csrf_field()}}
<div id="frmlogin" class="flex justify-center overflow-hidden h-screen items-center bg-gray-200 antialiased">
      <div class="flex flex-col w-8/12 sm:w-4/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
        <div
          class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg"
        > 
        </div>
        <div class="flex flex-col px-6 py-5 bg-gray-50">
          <p class="mb-2 font-semibold text-gray-700 text-center">Login</p>
          <label>User</label>
          <input type="textbox" name='us' placeholder="Nhập user">
          <label>Password</label>
          <input type="textbox" name='pw' placeholder="Nhập password">
          
          <button type="submit" onclick="closeForm()" class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
            Login
          </button>
        </div>
      </div>
    </div>
</form>
<script>
     document.getElementById("frmlogin").style.display = "none";
function openForm() {
  document.getElementById("frmlogin").style.display = "block";
}



function closeForm() {
  document.getElementById("frmlogin").style.display = "none";
}
</script>