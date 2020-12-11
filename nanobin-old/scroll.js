function OnScroll(e, t, n, o) {
    var l = this,
        a = document.getElementsByClassName(t || "reveal"),
        s = document.getElementsByClassName(e || "reveal__content"),
        r = 0;
    this.animation = o || "reveal__content", this.duration = parseFloat(n || 1), this.z_index = function (e) {
        r = e
    }, this.onlyOnce = !1, this.setParent = function (e) {
        a = document.getElementsByClassName(e || "reveal")
    }, this.setElementsClass = function (e) {
        s = document.getElementsByClassName(e || "reveal__content")
    }, this.onScrollDetected = function () {
        for (i = 0; i <= s.length; i++)
            if (void 0 !== s[i]) {
                for (var e = s[i], t = s[i].offsetTop, n = 1; n <= r; n++) e = e.parentElement, t += e.offsetTop;
                var o = t - a.scrollTop,
                    c = window.getComputedStyle(s[i], null).getPropertyValue("height");
                    c = -1 * parseFloat(c), window.innerHeight > o && o > c ? s[i].style.animation = l.animation + " " + l.duration + "s forwards" + (l.onlyOnce ? "0.1s" : "") : s[i].style.animation = "none 0 none"            }
    }, addEventListener("scroll", this.onScrollDetected)
}