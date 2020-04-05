<header class='header <? if ($HEADER_DARK === true) { echo 'dark'; }; ?> <? if ($HEADER_ABSOLUTE === true) { echo 'absolute'; }; ?>'>
  <div class='container'>

    <? include 'components/logo/logo.php' ?>

    <nav class='nav'>
      <div class='nav-item' id='catalogNavItem'>Каталог</div>
      <div class='pane' id='catalogPane'>
        <div class='block'>
          <a href='#' class='item title'>Женщинам</a>
          <a href='#' class='item'>Анал</a>
          <a href='#' class='item'>Букаке</a>
        </div>
        <div class='block'>
          <a href='#' class='item title'>Мужчинам</a>
          <a href='#' class='item'>Сабмиссия</a>
          <a href='#' class='item'>Вибраторы</a>
        </div>
      </div>

      <a class='nav-item' href='#'>Доставка</a>
      <a class='nav-item' href='#'>О нас</a>

      <div class='nav-item' id='cabinetNavItem'>Личный кабинет</div>
      <div class='pane' id='cabinetPane'>
        <a href='#' class='item'>Сабмиссия</a>
        <a href='#' class='item'>Сабмиссия</a>
        <a href='#' class='item'>Сабмиссия</a>
        <a href='#' class='item'>Выход</a>
      </div>
    </nav>

    <div class='sub'>
      <div class='search'>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0)">
            <path d="M20 19.293L14.5774 13.8704C15.463 12.8246 16 11.4746 16 10C16 6.6914 13.3086 4 10 4C6.69143 4 4 6.6914 4 10C4 13.3086 6.6914 16 10 16C11.4746 16 12.8246 15.463 13.8704 14.5774L19.293 20L20 19.293ZM10 15C7.24317 15 5.00001 12.7568 5.00001 10C5.00001 7.24317 7.24317 5.00001 10 5.00001C12.7568 5.00001 15 7.24317 15 10C15 12.7568 12.7568 15 10 15Z" fill="black"/>
          </g>
          <defs>
            <clipPath id="clip0">
              <rect x="4" y="4" width="16" height="16" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class='cart'>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18.9974 19.4741L17.768 7.89368C17.7422 7.65125 17.5356 7.46716 17.2891 7.46716H14.9784V6.94604C14.9784 5.32166 13.6423 4 12.0001 4C10.3577 4 9.02157 5.32166 9.02157 6.94604V7.46716H6.71085C6.4644 7.46716 6.25781 7.65125 6.23202 7.89368L5.00261 19.4741C4.98842 19.6083 5.03248 19.7422 5.12368 19.8425C5.215 19.9427 5.34508 20 5.48144 20H18.5184C18.6549 20 18.785 19.9427 18.8762 19.8425C18.9676 19.7422 19.0116 19.6083 18.9974 19.4741ZM9.98441 6.94604C9.98441 5.8468 10.8886 4.95239 12.0001 4.95239C13.1114 4.95239 14.0156 5.8468 14.0156 6.94604V7.46716H9.98441V6.94604ZM6.01605 19.0476L7.14439 8.41956H9.02157V9.46899C9.02157 9.73193 9.23717 9.94519 9.50299 9.94519C9.76881 9.94519 9.98441 9.73193 9.98441 9.46899V8.41956H14.0156V9.46899C14.0156 9.73193 14.2312 9.94519 14.497 9.94519C14.7628 9.94519 14.9784 9.73193 14.9784 9.46899V8.41956H16.8556L17.9839 19.0476H6.01605Z" fill="black"/>
        </svg>
        <div class='count'>
        </div>
      </div>
      <div id='hamburger'>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>


  </div>
</header>