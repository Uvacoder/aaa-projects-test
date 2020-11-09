//TODO:
/*
* Second level nav items in explorer
* Remove primary nav options from markup >_<
* Rewrite overflow sceneraio in explorer body
* Maybe write this in pure JS
* Responsive
*/

var expItems = {
  Industries: [
    {
      itemName: "Banking & Financial Services",
      itemURL: "https://www.abc.xyz",
      subCategories: [
        {
          itemName: "A",
          itemURL: "https://www.abc.xyz"
        },
        {
          itemName: "B",
          itemURL: "https://www.abc.xyz"
        }
      ]
    },
    {
      itemName: "Communications, Media & Technology",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Insurance",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Manufacturing",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Retail",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "HiTech",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Consumer Goods & Distribution",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Energy, Resources & Utilities",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Life Sciences & Healthcare",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Public Services",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Travel, Transportation & Hospitality",
      itemURL: "www.abc.xyz"
    }
  ],
  "Services &amp; Technologies": [
    {
      itemName: "SERVICES",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Quality Engineering",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Business Operations",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Consulting & Systems Integration",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Engineering",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Technology Operations",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "TCS Interactive",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "TECHNOLOGIES",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Artificial Intelligence",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Big Data",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Cloud",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Cyber Security",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Internet of Things",
      itemURL: "www.abc.xyz"
    }
  ],
  "Products &amp; Platforms": [
    {
      itemName: "PRODUCTS"
    },
    {
      itemName: "Chroma™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "ignio™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "iON",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Tap™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "TCS MasterCraft™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Customer Intelligence & Insights",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Intelligent Urban Exchange",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Optumera™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "TCS BaNCS",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Jile™",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "PLATFORMS",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Advanced Drug Development",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "ERP on Cloud",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Hobs",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "TCS Cloud Plus",
      itemURL: "www.abc.xyz"
    }
  ],
  "Discover TCS": [
    {
      itemName: "About Us",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Blogs",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Research and Innovation",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Corporate Sustainability",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Sports Sponsorships",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Alliances & Partnerships",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Investor Relations",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Perspectives",
      itemURL: "www.abc.xyz"
    },
    {
      itemName: "Newsroom",
      itemURL: "www.abc.xyz"
    }
  ]
};

$(".menu, .nav-items li").click(function(e) {
  var self = this;
  var explorerItems;
  if (this.innerHTML.indexOf("Careers") == -1) {
    explorerItems = $(".explorer-items li");
    $(".explorer").addClass("expanded");
    $(".site-body").addClass("fade");
    $(".explorer-items li").removeClass("active");
    if (self.innerHTML != "")
      explorerItems.each(function(idx, li) {
        if ($(li)[0].innerHTML == self.innerHTML) {
          $(this).addClass("active");
          loadExplorer($(li)[0].innerHTML);
        }
      });
    else {
      $(".sel-mob").addClass("active");
      loadExplorer("Industries");
    }
  }
});

$(".explorer-items li").click(function(e) {
  $(".explorer-items li").removeClass("active");
  $(this).addClass("active");
  loadExplorer(this.innerHTML);
});

$(".cross-wrapper, .site-body").click(function(e) {
  $("#explorer-body").empty();
  $(".explorer").removeClass("expanded");
  $(".site-body").removeClass("fade");
});

function loadExplorer(cat) {
  var _UL = $("#explorer-body")[0];
  var obj = expItems[cat];
  var _LI;
  $("#explorer-body").empty();
  Object.keys(obj).forEach(function(key) {
    _LI = $("<li></li>").text(obj[key].itemName)[0];
    if (!hasLowerCase(obj[key].itemName)) _LI.setAttribute("class", "heading");
    _UL.appendChild(_LI);
  });
}

function hasLowerCase(str) {
  return /[a-z]/.test(str);
}