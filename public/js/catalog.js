!function () {
    var e = {
        3148: function () {
            var e = !1, t = !1, n = document.querySelector(".catalog__mobile-actions"),
                r = document.querySelector(".catalog__body"), i = document.querySelector(".header").offsetHeight,
                o = i + 17;
            window.addEventListener("scroll", (function () {
                var a, s;
                document.documentElement.clientWidth < window.$mediashop.breakpoints.m && (a = Math.round(n.getBoundingClientRect().top), s = r.getBoundingClientRect().bottom, !e && a <= i ? (document.body.classList.add("filter-shadow"), e = !0) : e && a > i && (document.body.classList.remove("filter-shadow"), e = !1), !t && s < o ? (document.body.classList.remove("filter-shadow"), t = !0) : t && s >= o && (t = !1, document.body.classList.add("filter-shadow")))
            }), {passive: !0})
        }, 9833: function () {
            var e = !1, t = !1, n = !1, r = !1, i = document.querySelector(".filters__caption"),
                o = document.querySelector(".filters__buttons"), a = document.querySelector(".filters-wrap");
            a.addEventListener("scroll", (function () {
                return e = 0 !== a.scrollTop, t = a.scrollHeight === a.scrollTop + a.clientHeight, e ? e && !n ? (i.classList.add("shadows-header"), void (n = !0)) : r ? (o.classList.add("shadows-footer"), void (r = !1)) : void (t && !r && (o.classList.remove("shadows-footer"), r = !0)) : (i.classList.remove("shadows-header"), void (n = !1))
            }), {passive: !0})
        }, 8351: function (e, t, n) {
            "use strict";
            var r = n(994), i = n.n(r), o = n(3476), a = n.n(o)()(i());
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
                }, t.i = function (e, n, r) {
                    "string" == typeof e && (e = [[null, e, ""]]);
                    var i = {};
                    if (r) for (var o = 0; o < this.length; o++) {
                        var a = this[o][0];
                        null != a && (i[a] = !0)
                    }
                    for (var s = 0; s < e.length; s++) {
                        var c = [].concat(e[s]);
                        r && i[c[0]] || (n && (c[2] ? c[2] = "".concat(n, " and ").concat(c[2]) : c[2] = n), t.push(c))
                    }
                }, t
            }
        }, 994: function (e) {
            "use strict";

            function t(e, t) {
                (null == t || t > e.length) && (t = e.length);
                for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                return r
            }

            e.exports = function (e) {
                var n, r, i = (r = 4, function (e) {
                    if (Array.isArray(e)) return e
                }(n = e) || function (e, t) {
                    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
                        var n = [], r = !0, i = !1, o = void 0;
                        try {
                            for (var a, s = e[Symbol.iterator](); !(r = (a = s.next()).done) && (n.push(a.value), !t || n.length !== t); r = !0) ;
                        } catch (e) {
                            i = !0, o = e
                        } finally {
                            try {
                                r || null == s.return || s.return()
                            } finally {
                                if (i) throw o
                            }
                        }
                        return n
                    }
                }(n, r) || function (e, n) {
                    if (e) {
                        if ("string" == typeof e) return t(e, n);
                        var r = Object.prototype.toString.call(e).slice(8, -1);
                        return "Object" === r && e.constructor && (r = e.constructor.name), "Map" === r || "Set" === r ? Array.from(e) : "Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r) ? t(e, n) : void 0
                    }
                }(n, r) || function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }()), o = i[1], a = i[3];
                if ("function" == typeof btoa) {
                    var s = btoa(unescape(encodeURIComponent(JSON.stringify(a)))),
                        c = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(s),
                        l = "/*# ".concat(c, " */"), u = a.sources.map((function (e) {
                            return "/*# sourceURL=".concat(a.sourceRoot || "").concat(e, " */")
                        }));
                    return [o].concat(u).concat([l]).join("\n")
                }
                return [o].join("\n")
            }
        }, 1892: function (e, t, n) {
            "use strict";
            var r, i = function () {
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

            function s(e, t) {
                for (var n = {}, r = [], i = 0; i < e.length; i++) {
                    var s = e[i], c = t.base ? s[0] + t.base : s[0], l = n[c] || 0, u = "".concat(c, " ").concat(l);
                    n[c] = l + 1;
                    var d = a(u), f = {css: s[1], media: s[2], sourceMap: s[3]};
                    -1 !== d ? (o[d].references++, o[d].updater(f)) : o.push({
                        identifier: u,
                        updater: v(f, t),
                        references: 1
                    }), r.push(u)
                }
                return r
            }

            function c(e) {
                var t = document.createElement("style"), r = e.attributes || {};
                if (void 0 === r.nonce) {
                    var o = n.nc;
                    o && (r.nonce = o)
                }
                if (Object.keys(r).forEach((function (e) {
                    t.setAttribute(e, r[e])
                })), "function" == typeof e.insert) e.insert(t); else {
                    var a = i(e.insert || "head");
                    if (!a) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                    a.appendChild(t)
                }
                return t
            }

            var l, u = (l = [], function (e, t) {
                return l[e] = t, l.filter(Boolean).join("\n")
            });

            function d(e, t, n, r) {
                var i = n ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
                if (e.styleSheet) e.styleSheet.cssText = u(t, i); else {
                    var o = document.createTextNode(i), a = e.childNodes;
                    a[t] && e.removeChild(a[t]), a.length ? e.insertBefore(o, a[t]) : e.appendChild(o)
                }
            }

            function f(e, t, n) {
                var r = n.css, i = n.media, o = n.sourceMap;
                if (i ? e.setAttribute("media", i) : e.removeAttribute("media"), o && "undefined" != typeof btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(o)))), " */")), e.styleSheet) e.styleSheet.cssText = r; else {
                    for (; e.firstChild;) e.removeChild(e.firstChild);
                    e.appendChild(document.createTextNode(r))
                }
            }

            var h = null, m = 0;

            function v(e, t) {
                var n, r, i;
                if (t.singleton) {
                    var o = m++;
                    n = h || (h = c(t)), r = d.bind(null, n, o, !1), i = d.bind(null, n, o, !0)
                } else n = c(t), r = f.bind(null, n, t), i = function () {
                    !function (e) {
                        if (null === e.parentNode) return !1;
                        e.parentNode.removeChild(e)
                    }(n)
                };
                return r(e), function (t) {
                    if (t) {
                        if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap) return;
                        r(e = t)
                    } else i()
                }
            }

            e.exports = function (e, t) {
                (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = (void 0 === r && (r = Boolean(window && document && document.all && !window.atob)), r));
                var n = s(e = e || [], t);
                return function (e) {
                    if (e = e || [], "[object Array]" === Object.prototype.toString.call(e)) {
                        for (var r = 0; r < n.length; r++) {
                            var i = a(n[r]);
                            o[i].references--
                        }
                        for (var c = s(e, t), l = 0; l < n.length; l++) {
                            var u = a(n[l]);
                            0 === o[u].references && (o[u].updater(), o.splice(u, 1))
                        }
                        n = c
                    }
                }
            }
        }
    }, t = {};

    function n(r) {
        var i = t[r];
        if (void 0 !== i) return i.exports;
        var o = t[r] = {id: r, exports: {}};
        return e[r](o, o.exports, n), o.exports
    }

    n.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return n.d(t, {a: t}), t
    }, n.d = function (e, t) {
        for (var r in t) n.o(t, r) && !n.o(e, r) && Object.defineProperty(e, r, {enumerable: !0, get: t[r]})
    }, n.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, function () {
        "use strict";
        var e = n(1892), t = n.n(e), r = n(8351);
        t()(r.Z, {
            insert: "head",
            singleton: !1
        }), r.Z.locals, new window.$mediashop.Swiper(".product-card-container", {
            slidesPerView: "auto",
            navigation: {nextEl: ".btn-slider--next", prevEl: ".btn-slider--prev"},
            on: {
                slideChange: function (e) {
                    e.isEnd || e.el.classList.remove("shadow-disable")
                }, reachEnd: function (e) {
                    e.el.classList.add("shadow-disable")
                }
            }
        });
        var i = function () {
            return new window.$mediashop.Swiper(".catalog__tags-container", {freeMode: !0, slidesPerView: "auto"})
        }, o = function () {
            return new window.$mediashop.Swiper(".catalog__review-container", {
                slidesPerView: "auto",
                navigation: {nextEl: ".btn-slider--next", prevEl: ".btn-slider--prev"},
                on: {
                    slideChange: function (e) {
                        e.isEnd || e.el.classList.remove("shadow-disable")
                    }, reachEnd: function (e) {
                        e.el.classList.add("shadow-disable")
                    }
                }
            })
        }, a = window.$mediashop.breakpoints.m, s = null, c = null, l = !1, u = !1;

        function d(e, t) {
            for (var n = 0; n < t.length; n++) {
                var r = t[n];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
            }
        }

        document.documentElement.clientWidth >= a ? (s = o(), l = !0) : (c = i(), u = !0, setTimeout((function () {
            c.update()
        }))), window.addEventListener("resize", (function () {
            if (document.documentElement.clientWidth < a) return l && (s.destroy(), l = !1), void (u || (c = i(), u = !0));
            document.documentElement.clientWidth >= a && (l || (s = o(), l = !0), u && (c.destroy(), u = !1))
        })), n(9833), n(3148);
        var f = function () {
                function e(t) {
                    var n = this;
                    (function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    })(this, e), this.$el = this.getHtmlElement(t), this.$el && (this.dom = this.mapDOM(this.$el), this.eventNames = {
                        pointerdown: "pointerdown",
                        pointermove: "pointermove",
                        pointerup: "pointerup"
                    }, this._rangeKeys = ["low", "high"], this.$el.addEventListener(this.eventNames.pointerdown, this), this.$el.addEventListener("input", this), new ResizeObserver((function () {
                        n.updateSlider()
                    })).observe(this.$el), this.init())
                }

                var t, n;
                return t = e, (n = [{
                    key: "init", value: function () {
                        var e = this;
                        this._rangeKeys.forEach((function (t) {
                            e.dom.inputs[t].min = e.$el.dataset.min, e.dom.inputs[t].max = e.$el.dataset.max, e.dom.inputs[t].step = e.$el.dataset.step, e.dom.inputs[t].value = e.$el.dataset[t]
                        }))
                    }
                }, {
                    key: "renderSlider", value: function (e, t) {
                        var n = t - this.$el.dataset.min, r = "low" === e ? "--start-fill" : "--end-fill",
                            i = Math.round(n / this.valueRange * this.trackWidth);
                        this.dom.thumbs[e].style.transform = "translate3d(".concat(i, "px, 0, 0)"), this.dom.thumbs[e].dataset.translate = "".concat(i), this.dom.outputs[e].dataset.value = t, this.dom.track.style.setProperty(r, i + "px")
                    }
                }, {
                    key: "updateSlider", value: function () {
                        var e = this;
                        this._rangeKeys.forEach((function (t) {
                            e.renderSlider(t, e.dom.inputs[t].value)
                        }))
                    }
                }, {
                    key: "handleEvent", value: function (e) {
                        var t, n, r = null === (t = (n = e.target).closest) || void 0 === t ? void 0 : t.call(n, ".thumb");
                        if (r) switch (e.type) {
                            case this.eventNames.pointerdown:
                                this._shift = e.clientX - r.dataset.translate, r.setPointerCapture(e.pointerId), r.addEventListener(this.eventNames.pointermove, this), r.addEventListener(this.eventNames.pointerup, this);
                                break;
                            case this.eventNames.pointermove:
                                var i = r.dataset.key;
                                this.dom.inputs[i].focus();
                                var o = (e.clientX - this._shift) / this.trackWidth * this.valueRange + Number(this.$el.dataset.min);
                                this.setRangeValue(i, o);
                                break;
                            case this.eventNames.pointerup:
                                r.removeEventListener(this.eventNames.pointermove, this), r.removeEventListener(this.eventNames.pointerup, this);
                                break;
                            case"input":
                                this.setRangeValue(e.target.dataset.key, e.target.value)
                        }
                    }
                }, {
                    key: "setRangeValue", value: function (e, t) {
                        if ("low" === e) {
                            var n = this.dom.inputs.high, r = +n.value;
                            t >= r && (t = r - n.step)
                        }
                        if ("high" === e) {
                            var i = this.dom.inputs.low, o = +i.value;
                            t <= o && (t = o + Number(i.step))
                        }
                        this.dom.inputs[e].value = t, this.renderSlider(e, this.dom.inputs[e].value), this.$el.dataset[e] = t
                    }
                }, {
                    key: "getHtmlElement", value: function (e) {
                        var t = "string" == typeof e ? document.querySelector(e) : e;
                        if (t instanceof HTMLElement) return t
                    }
                }, {
                    key: "mapDOM", value: function (e) {
                        return {
                            track: e.querySelector(".track"),
                            thumbs: {
                                low: e.querySelector('.thumb[data-key="low"]'),
                                high: e.querySelector('.thumb[data-key="high"]')
                            },
                            outputs: {
                                low: e.querySelector('output[data-key="low"]'),
                                high: e.querySelector('output[data-key="high"]')
                            },
                            inputs: {
                                low: e.querySelector('input[data-key="low"]'),
                                high: e.querySelector('input[data-key="high"]')
                            }
                        }
                    }
                }, {
                    key: "trackWidth", get: function () {
                        return this.dom.track.offsetWidth - this.dom.thumbs.high.offsetWidth
                    }
                }, {
                    key: "valueRange", get: function () {
                        return this.$el.dataset.max - this.$el.dataset.min
                    }
                }]) && d(t.prototype, n), e
            }(), h = window.$mediashop.breakpoints.m, m = document.querySelector(".product-card-list"),
            v = document.createElement("div"), p = document.querySelector(".btn-view.active") || v,
            y = document.querySelector(".current-filter-container") || v,
            b = document.querySelectorAll(".catalog__filter-btn-mob, .filters__btn-show"),
            g = document.querySelector(".filters__buttons"), w = new Set, S = function () {
                b.forEach((function (e) {
                    return e.dataset.count = "".concat(w.size)
                })), g.classList[w.size ? "remove" : "add"]("hidden")
            }, E = function () {
                for (var e = 0; e < document.forms.length; e++) document.forms[e].reset();
                y.innerHTML = '<button class="catalog__reset-all" type="button">Сбросить все</button>', w = new Set, S()
            };
        E(), new f(".double-range"), document.addEventListener("click", (function (e) {
            var t = e.target, n = t.closest(".filters__load-items"), r = t.closest(".filters__title"),
                i = t.closest(".current-filter-remove"), o = t.closest(".filters__reset"),
                a = t.closest(".catalog__reset-all"), s = t.closest(".btn-view");
            if (s && m) return p.classList.remove("active"), s.classList.add("active"), p = s, void (m.className = "product-card-list ".concat(s.dataset.value));
            if (i) {
                var c = i.parentElement.dataset.filterName;
                return document.querySelectorAll('.filter-input[name="'.concat(c, '"]')).forEach((function (e) {
                    return e.checked = !1
                })), w.delete(c), i.parentElement.remove(), void S()
            }
            if (r) return function (e) {
                if (e.classList.contains("filters__title--vendor") && !e.classList.contains("filters__title-active")) {
                    e.classList.remove("show-all-filters");
                    var t = e.nextElementSibling, n = +t.dataset.visibleElements;
                    t.querySelector("style") || t.insertAdjacentHTML("afterbegin", "\n      <style>\n        .filters__item:nth-child(n + ".concat(n + 2, "):not(:last-child) {\n          display: none;\n        }\n      </style>"))
                }
            }(r), void r.classList.toggle("filters__title-active");
            if (n) {
                n.parentElement.previousElementSibling.classList.add("show-all-filters");
                var l = n.parentElement.querySelector("style");
                l && l.remove()
            } else (o || a) && E()
        })), document.addEventListener("change", (function (e) {
            var t = e.target;
            if (t.classList.contains("filter-input")) {
                var n = t.name.toLowerCase();
                if (t.checked && !w.has(n) && (w.add(n), function (e, t, n) {
                    e.insertAdjacentHTML("afterbegin", '\n   <span class="current-filter" data-filter-name="'.concat(t, '">\n      <span>').concat(n, '</span>\n      <button class="current-filter-remove" type="button" aria-label="удалить"></button>\n    </span>\n  '))
                }(y, n, t.value)), !t.checked && w.delete(n)) {
                    var r = y.querySelector('[data-filter-name="'.concat(n, '"]'));
                    r && r.remove()
                }
                document.querySelectorAll('.filter-input[name="'.concat(n, '"]')).forEach((function (e) {
                    return e.checked = t.checked
                })), S()
            }
            t.closest(".catalog__sort-left") && document.documentElement.clientWidth < h && setTimeout((function () {
                document.querySelector(".catalog__sort-btn-mob").innerHTML = t.nextElementSibling.innerText, window.$mediashop.modal.close()
            }), 300)
        }))
    }()
}();
