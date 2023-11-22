<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: #0d1b38;
            color: #fff;
            width: 200px;
            height: 100%;
            position: fixed;
            overflow-y: auto;
        }

        .accordion {
            background-color: #0d1b38;
            color: #fff;
            cursor: pointer;
            padding: 20px;
            width: 100%;
            border: none;
            text-align: left;
            font-size: 15px;
            transition: 0.4s;
            text-transform: uppercase;
            text-align: center;

        }

        .accordion:hover {
            background-color: #000000;
        }

        .panel {
            background-color: #bbbbbb82;
            padding-left: 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        .panel button {
            display: block;
            width: 113%;
            padding: 10px 8px 10px 20px;
            border: none;
            background-color: #ffffff;
            text-align: left;
            cursor: pointer;
            margin: 0 0 1px -21px;
            color: #015248;
            text-align: center;

                      }

          .fa-tachometer-alt:before,
          .fa-globe:before,
          .fa-map-marker-alt:before,
          .fa-blog:before {
              font-size: 35px !important;
          }

        .panel button:hover {
            background-color: #000000;
            color: white;

        }




    </style>
</head>
<body>
<!-- ... Your existing HTML ... -->

<div class="sidebar">
    <button class="accordion" onclick="window.location.href='/';">
        <i class="fas fa-tachometer-alt"></i> 
        <br>Dashboard
    </button>

    <button class="accordion">
        <div class="menu-item">
            <i class="fas fa-globe"></i>
            <br>Tours
        </div>
    </button>
    <div class="panel">
        <button onclick="window.location.href='tours/create';">
            <i class="fas fa-plus"></i> Create New
        </button>
        <button onclick="window.location.href='/tours';">
            <i class="fas fa-list"></i> Show Tours
        </button>
    </div>

    <button class="accordion">
        <i class="fas fa-map-marker-alt"></i><br> Destinations
    </button>
    <div class="panel">
        <button onclick="window.location.href='destinations/create';">
            <i class="fas fa-plus"></i> Create New
        </button>
        <button onclick="window.location.href='/destinations';">
            <i class="fas fa-list"></i> Show Destinations
        </button>
    </div>

    <button class="accordion">
        <i class="fas fa-blog"></i> <br>Blogs
    </button>
    <div class="panel">
        <button onclick="window.location.href='blogs/create';">
            <i class="fas fa-plus"></i> Create New
        </button>
        <button onclick="window.location.href='/blogs';">
            <i class="fas fa-list"></i> Show Blogs
        </button>
    </div>
</div>

<!-- Your existing script -->


<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>