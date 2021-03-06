!function () {
    "use strict";
    var e, n, t, r, o, i, a, c, u = {
        3986: function (e, n, t) {
            var r = t(994), o = t.n(r), i = t(3476), a = t.n(i)()(o());
            a.push([e.id, "", "", {version: 3, sources: [], names: [], mappings: "", sourceRoot: ""}]), n.Z = a
        }, 3476: function (e) {
            e.exports = function (e) {
                var n = [];
                return n.toString = function () {
                    return this.map((function (n) {
                        var t = e(n);
                        return n[2] ? "@media ".concat(n[2], " {").concat(t, "}") : t
                    })).join("")
                }, n.i = function (e, t, r) {
                    "string" == typeof e && (e = [[null, e, ""]]);
                    var o = {};
                    if (r) for (var i = 0; i < this.length; i++) {
                        var a = this[i][0];
                        null != a && (o[a] = !0)
                    }
                    for (var c = 0; c < e.length; c++) {
                        var u = [].concat(e[c]);
                        r && o[u[0]] || (t && (u[2] ? u[2] = "".concat(t, " and ").concat(u[2]) : u[2] = t), n.push(u))
                    }
                }, n
            }
        }, 994: function (e) {
            function n(e, n) {
                (null == n || n > e.length) && (n = e.length);
                for (var t = 0, r = new Array(n); t < n; t++) r[t] = e[t];
                return r
            }

            e.exports = function (e) {
                var t, r, o = (r = 4, function (e) {
                    if (Array.isArray(e)) return e
                }(t = e) || function (e, n) {
                    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
                        var t = [], r = !0, o = !1, i = void 0;
                        try {
                            for (var a, c = e[Symbol.iterator](); !(r = (a = c.next()).done) && (t.push(a.value), !n || t.length !== n); r = !0) ;
                        } catch (e) {
                            o = !0, i = e
                        } finally {
                            try {
                                r || null == c.return || c.return()
                            } finally {
                                if (o) throw i
                            }
                        }
                        return t
                    }
                }(t, r) || function (e, t) {
                    if (e) {
                        if ("string" == typeof e) return n(e, t);
                        var r = Object.prototype.toString.call(e).slice(8, -1);
                        return "Object" === r && e.constructor && (r = e.constructor.name), "Map" === r || "Set" === r ? Array.from(e) : "Arguments" === r || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r) ? n(e, t) : void 0
                    }
                }(t, r) || function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
                }()), i = o[1], a = o[3];
                if ("function" == typeof btoa) {
                    var c = btoa(unescape(encodeURIComponent(JSON.stringify(a)))),
                        u = "sourceMappingURL=data:application/json;charset=utf-8;base64,".concat(c),
                        s = "/*# ".concat(u, " */"), l = a.sources.map((function (e) {
                            return "/*# sourceURL=".concat(a.sourceRoot || "").concat(e, " */")
                        }));
                    return [i].concat(l).concat([s]).join("\n")
                }
                return [i].join("\n")
            }
        }, 1892: function (e, n, t) {
            var r, o = function () {
                var e = {};
                return function (n) {
                    if (void 0 === e[n]) {
                        var t = document.querySelector(n);
                        if (window.HTMLIFrameElement && t instanceof window.HTMLIFrameElement) try {
                            t = t.contentDocument.head
                        } catch (e) {
                            t = null
                        }
                        e[n] = t
                    }
                    return e[n]
                }
            }(), i = [];

            function a(e) {
                for (var n = -1, t = 0; t < i.length; t++) if (i[t].identifier === e) {
                    n = t;
                    break
                }
                return n
            }

            function c(e, n) {
                for (var t = {}, r = [], o = 0; o < e.length; o++) {
                    var c = e[o], u = n.base ? c[0] + n.base : c[0], s = t[u] || 0, l = "".concat(u, " ").concat(s);
                    t[u] = s + 1;
                    var f = a(l), d = {css: c[1], media: c[2], sourceMap: c[3]};
                    -1 !== f ? (i[f].references++, i[f].updater(d)) : i.push({
                        identifier: l,
                        updater: h(d, n),
                        references: 1
                    }), r.push(l)
                }
                return r
            }

            function u(e) {
                var n = document.createElement("style"), r = e.attributes || {};
                if (void 0 === r.nonce) {
                    var i = t.nc;
                    i && (r.nonce = i)
                }
                if (Object.keys(r).forEach((function (e) {
                    n.setAttribute(e, r[e])
                })), "function" == typeof e.insert) e.insert(n); else {
                    var a = o(e.insert || "head");
                    if (!a) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                    a.appendChild(n)
                }
                return n
            }

            var s, l = (s = [], function (e, n) {
                return s[e] = n, s.filter(Boolean).join("\n")
            });

            function f(e, n, t, r) {
                var o = t ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
                if (e.styleSheet) e.styleSheet.cssText = l(n, o); else {
                    var i = document.createTextNode(o), a = e.childNodes;
                    a[n] && e.removeChild(a[n]), a.length ? e.insertBefore(i, a[n]) : e.appendChild(i)
                }
            }

            function d(e, n, t) {
                var r = t.css, o = t.media, i = t.sourceMap;
                if (o ? e.setAttribute("media", o) : e.removeAttribute("media"), i && "undefined" != typeof btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i)))), " */")), e.styleSheet) e.styleSheet.cssText = r; else {
                    for (; e.firstChild;) e.removeChild(e.firstChild);
                    e.appendChild(document.createTextNode(r))
                }
            }

            var p = null, v = 0;

            function h(e, n) {
                var t, r, o;
                if (n.singleton) {
                    var i = v++;
                    t = p || (p = u(n)), r = f.bind(null, t, i, !1), o = f.bind(null, t, i, !0)
                } else t = u(n), r = d.bind(null, t, n), o = function () {
                    !function (e) {
                        if (null === e.parentNode) return !1;
                        e.parentNode.removeChild(e)
                    }(t)
                };
                return r(e), function (n) {
                    if (n) {
                        if (n.css === e.css && n.media === e.media && n.sourceMap === e.sourceMap) return;
                        r(e = n)
                    } else o()
                }
            }

            e.exports = function (e, n) {
                (n = n || {}).singleton || "boolean" == typeof n.singleton || (n.singleton = (void 0 === r && (r = Boolean(window && document && document.all && !window.atob)), r));
                var t = c(e = e || [], n);
                return function (e) {
                    if (e = e || [], "[object Array]" === Object.prototype.toString.call(e)) {
                        for (var r = 0; r < t.length; r++) {
                            var o = a(t[r]);
                            i[o].references--
                        }
                        for (var u = c(e, n), s = 0; s < t.length; s++) {
                            var l = a(t[s]);
                            0 === i[l].references && (i[l].updater(), i.splice(l, 1))
                        }
                        t = u
                    }
                }
            }
        }
    }, s = {};

    function l(e) {
        var n = s[e];
        if (void 0 !== n) return n.exports;
        var t = s[e] = {id: e, exports: {}};
        return u[e](t, t.exports, l), t.exports
    }

    l.n = function (e) {
        var n = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return l.d(n, {a: n}), n
    }, l.d = function (e, n) {
        for (var t in n) l.o(n, t) && !l.o(e, t) && Object.defineProperty(e, t, {enumerable: !0, get: n[t]})
    }, l.o = function (e, n) {
        return Object.prototype.hasOwnProperty.call(e, n)
    }, r = l(1892), o = l.n(r), i = l(3986), a = {
        insert: "head",
        singleton: !1
    }, o()(i.Z, a), i.Z.locals, c = window.$mediashop.breakpoints.m, new window.$mediashop.Swiper(".product-card-container", {
        slidesPerView: "auto",
        navigation: {nextEl: ".btn-slider--next", prevEl: ".btn-slider--prev"},
        breakpoints: (e = {}, n = c, t = {
            direction: "vertical",
            slidesPerView: 3,
            watchSlidesVisibility: !0,
            watchSlidesProgress: !0
        }, n in e ? Object.defineProperty(e, n, {
            value: t,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[n] = t, e)
    })
}();
