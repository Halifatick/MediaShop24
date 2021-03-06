!function () {
    var e = {
        3871: function () {
            var e = document.querySelector(".card-main__feedback-slider");
            e.addEventListener("click", (function (t) {
                var n = t.target.closest(".swiper-slide");
                if (n) {
                    var i = Array.prototype.indexOf.call(e.children, n);
                    window.$mediashop.modal.open("feedback-slider", {
                        beforeOpen: function (t) {
                            t.modal.querySelector(".fb-slider-container").prepend(e.cloneNode(!0))
                        }, modalMounted: function () {
                            new window.$mediashop.Swiper(".fb-slider-container", {
                                slidesPerView: "auto",
                                initialSlide: i,
                                navigation: {
                                    nextEl: ".fb-slider-container .btn-slider--next",
                                    prevEl: ".fb-slider-container .btn-slider--prev"
                                },
                                pagination: {el: ".fb-slider-container .slider-pagination", type: "fraction"}
                            })
                        }
                    })
                }
            }))
        }, 3921: function (e, t, n) {
            "use strict";
            var i = n(994), r = n.n(i), o = n(3476), a = n.n(o)()(r());
            a.push([e.id, "", "", {version: 3, sources: [], names: [], mappings: "", sourceRoot: ""}]), t.Z = a
        }, 3476: function (e) {
            "use strict";
            e.exports = function (e) {
                var t = [];
                return t.toString = function () {
                    return this.map((function (t) {
                        var n = e(t);
                        return t[2] ? "@media ".concat(t[2], " {").concat(n, "}") : n
                    })).join("")
                }, t.i = function (e, n, i) {
                    "string" == typeof e && (e = [[null, e, ""]]);
                    var r = {};
                    if (i) for (var o = 0; o < this.length; o++) {
                        var a = this[o][0];
                        null != a && (r[a] = !0)
                    }
                    for (var c = 0; c < e.length; c++) {
                        var d = [].concat(e[c]);
                        i && r[d[0]] || (n && (d[2] ? d[2] = "".concat(n, " and ").concat(d[2]) : d[2] = n), t.push(d))
                    }
                }, t
            }
        }, 994: function (e) {
            "use strict";

            function t(e, t) {
                (null == t || t > e.length) && (t = e.length);
                for (var n = 0, i = new Array(t); n < t; n++) i[n] = e[n];
                return i
            }

            e.exports = function (e) {
                var n, i, r = (i = 4, function (e) {
                    if (Array.isArray(e)) return e
                }(n = e) || function (e, t) {
                    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
                        var n = [], i = !0, r = !1, o = void 0;
                        try {
                            for (var a, c = e[Symbol.iterator](); !(i = (a = c.next()).done) && (n.push(a.value), !t || n.length !== t); i = !0) ;
                        } catch (e) {
                            r = !0, o = e
                        } finally {
                            try {
                                i || null == c.return || c.return()
                            } finally {
                                if (r) throw o
                            }
                        }
                        return n
                    }
                }(n, i) || function (e, n) {
                    if (e) {
                        if ("string" == typeof e) return t(e, n);
                        var i = Object.prototype.toString.call(e).slice(8, -1);
                        return "Object" === i && e.constructor && (i = e.constructor.name), "Map" === i || "Set" === i ? Array.from(e) : "Arguments" === i || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i) ? t(e, n) : void 0
                    }
                }(n, i) || function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }()), o = r[1], a = r[3];
                if ("function" == typeof btoa) {
                    var c = btoa(unescape(encodeURIComponent(JSON.stringify(a)))),
                        d = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(c),
                        l = "/*# ".concat(d, " */"), s = a.sources.map((function (e) {
                            return "/*# sourceURL=".concat(a.sourceRoot || "").concat(e, " */")
                        }));
                    return [o].concat(s).concat([l]).join("\n")
                }
                return [o].join("\n")
            }
        }, 1892: function (e, t, n) {
            "use strict";
            var i, r = function () {
                var e = {};
                return function (t) {
                    if (void 0 === e[t]) {
                        var n = document.querySelector(t);
                        if (window.HTMLIFrameElement && n instanceof window.HTMLIFrameElement) try {
                            n = n.contentDocument.head
                        } catch (e) {
                            n = null
                        }
                        e[t] = n
                    }
                    return e[t]
                }
            }(), o = [];

            function a(e) {
                for (var t = -1, n = 0; n < o.length; n++) if (o[n].identifier === e) {
                    t = n;
                    break
                }
                return t
            }

            function c(e, t) {
                for (var n = {}, i = [], r = 0; r < e.length; r++) {
                    var c = e[r], d = t.base ? c[0] + t.base : c[0], l = n[d] || 0, s = "".concat(d, " ").concat(l);
                    n[d] = l + 1;
                    var u = a(s), f = {css: c[1], media: c[2], sourceMap: c[3]};
                    -1 !== u ? (o[u].references++, o[u].updater(f)) : o.push({
                        identifier: s,
                        updater: v(f, t),
                        references: 1
                    }), i.push(s)
                }
                return i
            }

            function d(e) {
                var t = document.createElement("style"), i = e.attributes || {};
                if (void 0 === i.nonce) {
                    var o = n.nc;
                    o && (i.nonce = o)
                }
                if (Object.keys(i).forEach((function (e) {
                    t.setAttribute(e, i[e])
                })), "function" == typeof e.insert) e.insert(t); else {
                    var a = r(e.insert || "head");
                    if (!a) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                    a.appendChild(t)
                }
                return t
            }

            var l, s = (l = [], function (e, t) {
                return l[e] = t, l.filter(Boolean).join("\n")
            });

            function u(e, t, n, i) {
                var r = n ? "" : i.media ? "@media ".concat(i.media, " {").concat(i.css, "}") : i.css;
                if (e.styleSheet) e.styleSheet.cssText = s(t, r); else {
                    var o = document.createTextNode(r), a = e.childNodes;
                    a[t] && e.removeChild(a[t]), a.length ? e.insertBefore(o, a[t]) : e.appendChild(o)
                }
            }

            function f(e, t, n) {
                var i = n.css, r = n.media, o = n.sourceMap;
                if (r ? e.setAttribute("media", r) : e.removeAttribute("media"), o && "undefined" != typeof btoa && (i += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o)))), " */")), e.styleSheet) e.styleSheet.cssText = i; else {
                    for (; e.firstChild;) e.removeChild(e.firstChild);
                    e.appendChild(document.createTextNode(i))
                }
            }

            var p = null, m = 0;

            function v(e, t) {
                var n, i, r;
                if (t.singleton) {
                    var o = m++;
                    n = p || (p = d(t)), i = u.bind(null, n, o, !1), r = u.bind(null, n, o, !0)
                } else n = d(t), i = f.bind(null, n, t), r = function () {
                    !function (e) {
                        if (null === e.parentNode) return !1;
                        e.parentNode.removeChild(e)
                    }(n)
                };
                return i(e), function (t) {
                    if (t) {
                        if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap) return;
                        i(e = t)
                    } else r()
                }
            }

            e.exports = function (e, t) {
                (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = (void 0 === i && (i = Boolean(window && document && document.all && !window.atob)), i));
                var n = c(e = e || [], t);
                return function (e) {
                    if (e = e || [], "[object Array]" === Object.prototype.toString.call(e)) {
                        for (var i = 0; i < n.length; i++) {
                            var r = a(n[i]);
                            o[r].references--
                        }
                        for (var d = c(e, t), l = 0; l < n.length; l++) {
                            var s = a(n[l]);
                            0 === o[s].references && (o[s].updater(), o.splice(s, 1))
                        }
                        n = d
                    }
                }
            }
        }
    }, t = {};

    function n(i) {
        var r = t[i];
        if (void 0 !== r) return r.exports;
        var o = t[i] = {id: i, exports: {}};
        return e[i](o, o.exports, n), o.exports
    }

    n.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return n.d(t, {a: t}), t
    }, n.d = function (e, t) {
        for (var i in t) n.o(t, i) && !n.o(e, i) && Object.defineProperty(e, i, {enumerable: !0, get: t[i]})
    }, n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, function () {
        "use strict";
        var e = n(1892), t = n.n(e), i = n(3921);
        t()(i.Z, {insert: "head", singleton: !1}), i.Z.locals;
        var r, o, a, c = window.$mediashop.breakpoints.m, d = document.querySelector(".preview-slider-thumb"),
            l = new window.$mediashop.Swiper(".preview-slider-thumb", {
                slidesPerView: 4,
                spaceBetween: 10,
                freeMode: !0,
                freeModeSticky: !0,
                watchSlidesVisibility: !0,
                watchSlidesProgress: !0
            }), s = {
                slidesPerView: "auto",
                pagination: {el: ".slider-pagination", clickable: !0},
                navigation: {nextEl: ".preview-slider-btn-next", prevEl: ".preview-slider-btn-prev "},
                get thumbs() {
                    return d ? {swiper: l} : {swiper: null}
                },
                on: {
                    click: function (e) {
                        e.clickedIndex >= 0 && window.$mediashop.modal.open("card-slider", {
                            beforeOpen: function (e) {
                                var t, n, i, r, o, a;
                                t = e.modal, n = document.querySelector(".card-preview__slider"), i = t.querySelector(".card-slider-modal__body"), o = (r = n.cloneNode(!0)).querySelector(".preview-slider"), a = r.querySelector(".preview-slider-thumb__wrap"), r.querySelector(".preview-slider-container").insertAdjacentHTML("beforeend", '<div class="preview-slider-pagination"></div>'), o.removeAttribute("id"), a.removeAttribute("id"), i.append(r), e.modal.classList.add("loaded")
                            }, modalMounted: function (t) {
                                !function (e, t) {
                                    var n = null;
                                    document.documentElement.clientWidth >= window.$mediashop.breakpoints.m && (n = new window.$mediashop.Swiper(".card-slider-modal .preview-slider-thumb", {
                                        direction: "vertical",
                                        slidesPerView: "auto",
                                        freeMode: !0,
                                        freeModeSticky: !0,
                                        spaceBetween: 50,
                                        watchSlidesVisibility: !0,
                                        watchSlidesProgress: !0
                                    })), setTimeout((function () {
                                        e.classList.remove("loaded"), new window.$mediashop.Swiper(".card-slider-modal .preview-slider-container", {
                                            slidesPerView: "auto",
                                            initialSlide: t,
                                            navigation: {
                                                nextEl: ".card-slider-modal .btn-slider--next",
                                                prevEl: ".card-slider-modal .btn-slider--prev"
                                            },
                                            pagination: {
                                                el: ".card-slider-modal .preview-slider-pagination",
                                                type: "fraction"
                                            },
                                            thumbs: {swiper: n},
                                            on: {
                                                activeIndexChange: function (e) {
                                                    window.$mediashop.previewSliderActiveIndex = e.activeIndex
                                                }
                                            }
                                        })
                                    }), 500)
                                }(t.modal, e.activeIndex), window.$mediashop.previewSliderActiveIndex = e.activeIndex
                            }, beforeClose: function () {
                                e.slideTo(window.$mediashop.previewSliderActiveIndex || 0, 0)
                            }
                        })
                    }
                }
            };
        new window.$mediashop.Swiper(".preview-slider-container", s), new window.$mediashop.Swiper(".options-slider", {
            pagination: {
                el: ".slider-pagination",
                clickable: !0
            },
            breakpoints: (r = {}, o = c, a = {slidesPerView: 5}, o in r ? Object.defineProperty(r, o, {
                value: a,
                enumerable: !0,
                configurable: !0,
                writable: !0
            }) : r[o] = a, r)
        }), new window.$mediashop.Swiper(".product-card-container", {
            slidesPerView: "auto",
            navigation: {nextEl: ".btn-slider--next", prevEl: ".btn-slider--prev"},
            on: {
                slideChange: function (e) {
                    e.isEnd || e.el.classList.remove("shadow-disable")
                }, reachEnd: function (e) {
                    e.el.classList.add("shadow-disable")
                }
            }
        }), n(3871);
        var u = function (e, t, n, i, r) {
            return i * ((t = t / r - 1) * t * t * t * t + 1) + n
        }, f = "scrollBehavior" in document.documentElement.style, p = document.querySelector(".header");
        !function () {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : document,
                t = e.querySelector(".feedback-modal__gallery"), n = e.querySelector("#fileLoader");
            if (t && n) {
                var i = function (e) {
                    return /\.(png|jpe?g)$/i.test(e)
                };
                n.addEventListener("change", (function (e) {
                    var n = e.target, r = "";
                    Array.prototype.forEach.call(n.files, (function (e) {
                        i(e.name) && (r += '\n      <div class="feedback-modal__img">\n        <img src="'.concat(URL.createObjectURL(e), '" width="110" height="60" alt="???????? ????????????????????????">\n        <button class="remove-img" type="button" aria-label="?????????????? ????????"></button>\n      </div>\n      '))
                    })), t.insertAdjacentHTML("afterbegin", r)
                }))
            }
        }();
        var m = !1, v = window.$mediashop.breakpoints.m;
        document.addEventListener("click", (function (e) {
            var t = e.target.closest(".anchor-link"), n = e.target.closest(".card-main__accordion-title"),
                i = e.target.closest(".remove-img");
            if (e.target.closest(".fixed-buy-click") && (e.preventDefault(), document.querySelector(".product-card__buy-click").click()), t) {
                !function (e, t) {
                    if (!f) {
                        t.preventDefault();
                        var n = e.getAttribute("href") || "", i = document.querySelector(n);
                        if (i) {
                            var r = i.getBoundingClientRect().top + p.offsetHeight;
                            !function (e, t) {
                                var n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "scrollTop",
                                    i = null, r = e[n], o = t - r, a = 1e3;
                                !function t(c) {
                                    i || (i = c);
                                    var d = c - i;
                                    d / a > 1 || (e[n] = u(0, d, r, o, a), requestAnimationFrame(t))
                                }()
                            }(document.documentElement, r)
                        }
                    }
                }(t, e);
                var r = t.getAttribute("href"), o = document.querySelector(r);
                o.classList.contains("active") || o.click()
            } else n ? (!m && n.classList.contains("card-main__accordion-review") && (m = !0, document.querySelector(".card-main__iframe").insertAdjacentHTML("beforeend", '<iframe src="https://www.youtube.com/embed/3MAfK4vN1Hw" allowfullscreen="" width="16" height="9"></iframe>')), function (e) {
                var t = e.closest(".accordion");
                if (t) if (e.classList.contains("active")) e.classList.remove("active"); else {
                    var n = t.querySelector(".active");
                    n && n.classList.remove("active"), e.classList.add("active")
                }
            }(n)) : i && i.parentElement.remove()
        }));
        var w = !1, h = function () {
            document.querySelector(".card-main__accordion-title.active") || document.querySelector(".card-main__accordion-title").classList.add("active"), w = !0
        };
        document.documentElement.clientWidth >= v && h();
        var b = !1, y = document.querySelector(".card-preview__footer"),
            g = document.querySelector(".card-preview__fixed"), S = function () {
                var e = Math.round(y.getBoundingClientRect().top);
                if (!b && e <= 124) return g.classList.add("fixed"), void (b = !0);
                b && e > 124 && (g.classList.remove("fixed"), b = !1)
            }, x = window.$mediashop.breakpoints.m;
        window.addEventListener("scroll", (function () {
            document.documentElement.clientWidth >= x || S()
        }), {passive: !0});
        var E = document.documentElement.clientWidth < x;
        window.addEventListener("resize", (function () {
            if (document.documentElement.clientWidth >= v && !w ? h() : w = !1, document.documentElement.clientWidth < x && !E) return S(), void (E = !0);
            document.documentElement.clientWidth >= x && E && (E = !1)
        }))
    }()
}();
