// 로컬스토리지

// document.addEventListener('DOMContentLoaded', () => {
//   const loginForm = document.querySelector('#loginForm');
//   const userId = document.querySelector('#userid');
//   const rememberMe = document.querySelector('#rememberMe');

//   // localStorage.setItem('변수명, 값'); // 로컬스토리지 저장
//   // localStorage.getItem('변수명'); // 로컬스토리지 불러오기
//   // localStorage.removeItem('변수명'); // 로컬스토리지 삭제

//   userId.value = localStorage.getItem('rememberUserId') || '';
//   loginForm.addEventListener('submit', () => {
//     if (rememberMe.checked) {
//       localStorage.setItem('rememberUserId', userId.value);
//     } else {
//       localStorage.removeItem('rememberUserId');
//     }
//   });
// });

$(function () {
  const loginForm = $('#loginForm');
  const userId = $('#userid');
  const rememberMe = $('#rememberMe');

  userId.val(localStorage.getItem('rememberUserId') || '');
  loginForm.submit(() => {
    if (rememberMe.is(':checked')) {
      localStorage.setItem('rememberUserId', userId.val());
    } else {
      localStorage.removeItem('rememberUserId');
    }
  });
});
