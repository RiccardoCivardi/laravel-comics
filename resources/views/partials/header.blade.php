<header>

    <div class="container">

      <div class="logo">
        <img src="/img/dc-logo.png" alt="Logo DC">
      </div>

      <nav>
        <ul>
          <li
            v-for="(link, index) in menu"
            :key="index"
            :class="{'active': link.current}">
            <a :href="link.href">{{link.text}}</a>
          </li>
        </ul>
      </nav>

    </div>

</header>
