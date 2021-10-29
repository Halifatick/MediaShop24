!function () {
    "use strict";
    var e, t, n, r = {
        2282: function (e, t, n) {
            var r = n(994), o = n.n(r), i = n(3476), a = n.n(i)()(o());
            a.push([e.id, "", "", {version: 3, sources: [], names: [], mappings: "", sourceRoot: ""}]), t.Z = a
        }, 3476: function (e) {
            e.exports = function (e) {
                var t = [];
                return t.toString = function () {
                    return this.map((function (t) {
                        var n = e(t);
                        return t[2] ? "@media ".concat(t[2], " {").concat(n, "}") : n
                    })).join("")
                }, t.i = function (e, n, r) {
                    "string" == typeof e && (e = [[null, e, ""]]);
                    var o = {};
                    if (r) for (var i = 0; i < this.length; i++) {
                        var a = this[i][0];
                        null != a && (o[a] = !0)
                    }
                    for (var c = 0; c < e.length; c++) {
                        var u = [].concat(e[c]);
                        r && o[u[0]] || (n && (u[2] ? u[2] = "".concat(n, " and ").concat(u[2]) : u[2] = n), t.push(u))
                    }
                }, t
            }
        }, 994: function (e) {
            function t(e, t) {
                (null == t || t > e.length) && (t = e.length);
                for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                return r
            }

            e.exports = function (e) {
                var n, r, o = (r = 4, function (e) {
                    if (Array.isArray(e)) return e
                }(n = e) || function (e, t) {
                    if ("undefined" != typeof Symbol && Symbol.iterator in Object(e)) {
                        var n = [], r = !0, o = !1, i = void 0;
                        try {
                            for (var a, c = e[Symbol.iterator](); !(r = (a = c.next()).done) && (n.push(a.value), !t || n.length !== t); r = !0) ;
                        } catch (e) {
                            o = !0, i = e
                        } finally {
                            try {
                                r || null == c.return || c.return()
                            } finally {
                                if (o) throw i
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
        }, 1892: function (e, t, n) {
            var r, o = function () {
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
            }(), i = [];

            function a(e) {
                for (var t = -1, n = 0; n < i.length; n++) if (i[n].identifier === e) {
                    t = n;
                    break
                }
                return t
            }

            function c(e, t) {
                for (var n = {}, r = [], o = 0; o < e.length; o++) {
                    var c = e[o], u = t.base ? c[0] + t.base : c[0], s = n[u] || 0, l = "".concat(u, " ").concat(s);
                    n[u] = s + 1;
                    var f = a(l), d = {css: c[1], media: c[2], sourceMap: c[3]};
                    -1 !== f ? (i[f].references++, i[f].updater(d)) : i.push({
                        identifier: l,
                        updater: m(d, t),
                        references: 1
                    }), r.push(l)
                }
                return r
            }

            function u(e) {
                var t = document.createElement("style"), r = e.attributes || {};
                if (void 0 === r.nonce) {
                    var i = n.nc;
                    i && (r.nonce = i)
                }
                if (Object.keys(r).forEach((function (e) {
                    t.setAttribute(e, r[e])
                })), "function" == typeof e.insert) e.insert(t); else {
                    var a = o(e.insert || "head");
                    if (!a) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
                    a.appendChild(t)
                }
                return t
            }

            var s, l = (s = [], function (e, t) {
                return s[e] = t, s.filter(Boolean).join("\n")
            });

            function f(e, t, n, r) {
                var o = n ? "" : r.media ? "@media ".concat(r.media, " {").concat(r.css, "}") : r.css;
                if (e.styleSheet) e.styleSheet.cssText = l(t, o); else {
                    var i = document.createTextNode(o), a = e.childNodes;
                    a[t] && e.removeChild(a[t]), a.length ? e.insertBefore(i, a[t]) : e.appendChild(i)
                }
            }

            function d(e, t, n) {
                var r = n.css, o = n.media, i = n.sourceMap;
                if (o ? e.setAttribute("media", o) : e.removeAttribute("media"), i && "undefined" != typeof btoa && (r += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(i)))), " */")), e.styleSheet) e.styleSheet.cssText = r; else {
                    for (; e.firstChild;) e.removeChild(e.firstChild);
                    e.appendChild(document.createTextNode(r))
                }
            }

            var p = null, v = 0;

            function m(e, t) {
                var n, r, o;
                if (t.singleton) {
                    var i = v++;
                    n = p || (p = u(t)), r = f.bind(null, n, i, !1), o = f.bind(null, n, i, !0)
                } else n = u(t), r = d.bind(null, n, t), o = function () {
                    !function (e) {
                        if (null === e.parentNode) return !1;
                        e.parentNode.removeChild(e)
                    }(n)
                };
                return r(e), function (t) {
                    if (t) {
                        if (t.css === e.css && t.media === e.media && t.sourceMap === e.sourceMap) return;
                        r(e = t)
                    } else o()
                }
            }

            e.exports = function (e, t) {
                (t = t || {}).singleton || "boolean" == typeof t.singleton || (t.singleton = (void 0 === r && (r = Boolean(window && document && document.all && !window.atob)), r));
                var n = c(e = e || [], t);
                return function (e) {
                    if (e = e || [], "[object Array]" === Object.prototype.toString.call(e)) {
                        for (var r = 0; r < n.length; r++) {
                            var o = a(n[r]);
                            i[o].references--
                        }
                        for (var u = c(e, t), s = 0; s < n.length; s++) {
                            var l = a(n[s]);
                            0 === i[l].references && (i[l].updater(), i.splice(l, 1))
                        }
                        n = u
                    }
                }
            }
        }
    }, o = {};

    function i(e) {
        var t = o[e];
        if (void 0 !== t) return t.exports;
        var n = o[e] = {id: e, exports: {}};
        return r[e](n, n.exports, i), n.exports
    }

    i.n = function (e) {
        var t = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return i.d(t, {a: t}), t
    }, i.d = function (e, t) {
        for (var n in t) i.o(t, n) && !i.o(e, n) && Object.defineProperty(e, n, {enumerable: !0, get: t[n]})
    }, i.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, e = i(1892), t = i.n(e), n = i(2282), t()(n.Z, {
        insert: "head",
        singleton: !1
    }), n.Z.locals, document.addEventListener("click", (function (e) {
        var t = e.target.closest(".lk-form__change");
        if (e.target.closest(".lk-form__save, .lk-form__cancel") || t) {
            var n = e.target.closest(".lk-form"), r = n.querySelector(".lk-form__inner");
            r && (r.disabled = !t), function (e) {
                if (e instanceof HTMLElement) {
                    var t = e.innerText;
                    e.innerText = e.dataset.edit, e.dataset.edit = t
                }
            }(n.querySelector(".title"))
        }
    }))
}();
