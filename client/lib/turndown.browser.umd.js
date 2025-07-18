((e, n) => {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = n())
    : "function" == typeof define && define.amd
    ? define(n)
    : ((e = "undefined" != typeof globalThis ? globalThis : e || self),
      (e.TurndownService = n()));
})(this, function () {
  function c(e, n) {
    return Array(n + 1).join(e);
  }
  var n = [
    "ADDRESS",
    "ARTICLE",
    "ASIDE",
    "AUDIO",
    "BLOCKQUOTE",
    "BODY",
    "CANVAS",
    "CENTER",
    "DD",
    "DIR",
    "DIV",
    "DL",
    "DT",
    "FIELDSET",
    "FIGCAPTION",
    "FIGURE",
    "FOOTER",
    "FORM",
    "FRAMESET",
    "H1",
    "H2",
    "H3",
    "H4",
    "H5",
    "H6",
    "HEADER",
    "HGROUP",
    "HR",
    "HTML",
    "ISINDEX",
    "LI",
    "MAIN",
    "MENU",
    "NAV",
    "NOFRAMES",
    "NOSCRIPT",
    "OL",
    "OUTPUT",
    "P",
    "PRE",
    "SECTION",
    "TABLE",
    "TBODY",
    "TD",
    "TFOOT",
    "TH",
    "THEAD",
    "TR",
    "UL",
  ];
  function d(e) {
    return o(e, n);
  }
  var r = [
    "AREA",
    "BASE",
    "BR",
    "COL",
    "COMMAND",
    "EMBED",
    "HR",
    "IMG",
    "INPUT",
    "KEYGEN",
    "LINK",
    "META",
    "PARAM",
    "SOURCE",
    "TRACK",
    "WBR",
  ];
  function p(e) {
    return o(e, r);
  }
  var i = [
    "A",
    "TABLE",
    "THEAD",
    "TBODY",
    "TFOOT",
    "TH",
    "TD",
    "IFRAME",
    "SCRIPT",
    "AUDIO",
    "VIDEO",
  ];
  function o(e, n) {
    return 0 <= n.indexOf(e.nodeName);
  }
  function a(n, e) {
    return (
      n.getElementsByTagName &&
      e.some(function (e) {
        return n.getElementsByTagName(e).length;
      })
    );
  }
  var t = {
    paragraph: {
      filter: "p",
      replacement: function (e) {
        return "\n\n" + e + "\n\n";
      },
    },
    lineBreak: {
      filter: "br",
      replacement: function (e, n, t) {
        return t.br + "\n";
      },
    },
    heading: {
      filter: ["h1", "h2", "h3", "h4", "h5", "h6"],
      replacement: function (e, n, t) {
        var r,
          i = Number(n.nodeName.charAt(1));
        return "setext" === t.headingStyle && i < 3
          ? ((r = c(1 === i ? "=" : "-", e.length)),
            "\n\n" + e + "\n" + r + "\n\n")
          : "\n\n" + c("#", i) + " " + e + "\n\n";
      },
    },
    blockquote: {
      filter: "blockquote",
      replacement: function (e) {
        e = e.replace(/^\n+|\n+$/g, "");
        e = e.replace(/^/gm, "> ");
        return "\n\n" + e + "\n\n";
      },
    },
    list: {
      filter: ["ul", "ol"],
      replacement: function (e, n) {
        var t = n.parentNode;
        return "LI" === t.nodeName && t.lastElementChild === n
          ? "\n" + e
          : "\n\n" + e + "\n\n";
      },
    },
    listItem: {
      filter: "li",
      replacement: function (e, n, t) {
        e = e
          .replace(/^\n+/, "")
          .replace(/\n+$/, "\n")
          .replace(/\n/gm, "\n    ");
        var r,
          i = t.bulletListMarker + "   ",
          o = n.parentNode;
        "OL" === o.nodeName &&
          ((r = o.getAttribute("start")),
          (o = Array.prototype.indexOf.call(o.children, n)),
          (i = (r ? Number(r) + o : o + 1) + ".  "));
        return i + e + (n.nextSibling && !/\n$/.test(e) ? "\n" : "");
      },
    },
    indentedCodeBlock: {
      filter: function (e, n) {
        return (
          "indented" === n.codeBlockStyle &&
          "PRE" === e.nodeName &&
          e.firstChild &&
          "CODE" === e.firstChild.nodeName
        );
      },
      replacement: function (e, n, t) {
        return (
          "\n\n    " +
          n.firstChild.textContent.replace(/\n/g, "\n    ") +
          "\n\n"
        );
      },
    },
    fencedCodeBlock: {
      filter: function (e, n) {
        return (
          "fenced" === n.codeBlockStyle &&
          "PRE" === e.nodeName &&
          e.firstChild &&
          "CODE" === e.firstChild.nodeName
        );
      },
      replacement: function (e, n, t) {
        for (
          var r,
            i = n.firstChild.getAttribute("class") || "",
            i = (i.match(/language-(\S+)/) || [null, ""])[1],
            o = n.firstChild.textContent,
            a = t.fence.charAt(0),
            l = 3,
            u = new RegExp("^" + a + "{3,}", "gm");
          (r = u.exec(o));

        )
          r[0].length >= l && (l = r[0].length + 1);
        a = c(a, l);
        return "\n\n" + a + i + "\n" + o.replace(/\n$/, "") + "\n" + a + "\n\n";
      },
    },
    horizontalRule: {
      filter: "hr",
      replacement: function (e, n, t) {
        return "\n\n" + t.hr + "\n\n";
      },
    },
    inlineLink: {
      filter: function (e, n) {
        return (
          "inlined" === n.linkStyle &&
          "A" === e.nodeName &&
          e.getAttribute("href")
        );
      },
      replacement: function (e, n) {
        var t = n.getAttribute("href"),
          t = t && t.replace(/([()])/g, "\\$1"),
          r = u(n.getAttribute("title")),
          r = r && ' "' + r.replace(/"/g, '\\"') + '"';
        return "[" + e + "](" + t + r + ")";
      },
    },
    referenceLink: {
      filter: function (e, n) {
        return (
          "referenced" === n.linkStyle &&
          "A" === e.nodeName &&
          e.getAttribute("href")
        );
      },
      replacement: function (e, n, t) {
        var r = n.getAttribute("href"),
          i = u(n.getAttribute("title")),
          i = i && ' "' + i + '"';
        switch (t.linkReferenceStyle) {
          case "collapsed":
            a = "[" + e + "][]";
            l = "[" + e + "]: " + r + i;
            break;
          case "shortcut":
            a = "[" + e + "]";
            l = "[" + e + "]: " + r + i;
            break;
          default:
            var o = this.references.length + 1,
              a = "[" + e + "][" + o + "]",
              l = "[" + o + "]: " + r + i;
        }
        this.references.push(l);
        return a;
      },
      references: [],
      append: function (e) {
        var n = "";
        if (this.references.length) {
          n = "\n\n" + this.references.join("\n") + "\n\n";
          this.references = [];
        }
        return n;
      },
    },
    emphasis: {
      filter: ["em", "i"],
      replacement: function (e, n, t) {
        return e.trim() ? t.emDelimiter + e + t.emDelimiter : "";
      },
    },
    strong: {
      filter: ["strong", "b"],
      replacement: function (e, n, t) {
        return e.trim() ? t.strongDelimiter + e + t.strongDelimiter : "";
      },
    },
    code: {
      filter: function (e) {
        var n = e.previousSibling || e.nextSibling,
          n = "PRE" === e.parentNode.nodeName && !n;
        return "CODE" === e.nodeName && !n;
      },
      replacement: function (e) {
        if (!e) return "";
        e = e.replace(/\r?\n|\r/g, " ");
        for (
          var n = /^`|^ .*?[^ ].* $|`$/.test(e) ? " " : "",
            t = "`",
            r = e.match(/`+/gm) || [];
          -1 !== r.indexOf(t);

        )
          t += "`";
        return t + n + e + n + t;
      },
    },
    image: {
      filter: "img",
      replacement: function (e, n) {
        var t = u(n.getAttribute("alt")),
          r = n.getAttribute("src") || "",
          i = u(n.getAttribute("title")),
          i = i ? ' "' + i + '"' : "";
        return r ? "![" + t + "](" + r + i + ")" : "";
      },
    },
  };
  function u(e) {
    return e ? e.replace(/(\n+\s*)+/g, "\n") : "";
  }
  function l(e) {
    this.options = e;
    this._keep = [];
    this._remove = [];
    this.blankRule = { replacement: e.blankReplacement };
    this.keepReplacement = e.keepReplacement;
    this.defaultRule = { replacement: e.defaultReplacement };
    this.array = [];
    for (var n in e.rules) this.array.push(e.rules[n]);
  }
  l.prototype = {
    add: function (e, n) {
      this.array.unshift(n);
    },
    keep: function (e) {
      this._keep.unshift({ filter: e, replacement: this.keepReplacement });
    },
    remove: function (e) {
      this._remove.unshift({
        filter: e,
        replacement: function () {
          return "";
        },
      });
    },
    forNode: function (e) {
      return e.isBlank
        ? this.blankRule
        : s(this.array, e, this.options) ||
            s(this._keep, e, this.options) ||
            s(this._remove, e, this.options) ||
            this.defaultRule;
    },
    forEach: function (e) {
      for (var n = 0; n < this.array.length; n++) e(this.array[n], n);
    },
  };
  function s(e, n, t) {
    for (var r = 0; r < e.length; r++) {
      var i = e[r];
      if (
        ((e, n, t) => {
          var r = e.filter;
          if ("string" == typeof r) return r === n.nodeName.toLowerCase();
          if (Array.isArray(r)) return -1 < r.indexOf(n.nodeName.toLowerCase());
          if ("function" == typeof r) return !!r.call(e, n, t);
          throw new TypeError(
            "`filter` needs to be a string, array, or function"
          );
        })(i, n, t)
      )
        return i;
    }
  }
  function h(e) {
    var n = e.nextSibling || e.parentNode;
    e.parentNode.removeChild(e);
    return n;
  }
  function g(e, n, t) {
    return (e && e.parentNode === n) || t(n)
      ? n.nextSibling || n.parentNode
      : n.firstChild || n.nextSibling || n.parentNode;
  }
  var f = "undefined" != typeof window ? window : {};
  var m,
    y = (() => {
      var e = f.DOMParser,
        n = !1;
      try {
        new e().parseFromString("", "text/html") && (n = !0);
      } catch (e) {}
      return n;
    })()
      ? f.DOMParser
      : (() => {
          function e() {}
          (() => {
            var n = !1;
            try {
              document.implementation.createHTMLDocument("").open();
            } catch (e) {
              f.ActiveXObject && (n = !0);
            }
            return n;
          })()
            ? (e.prototype.parseFromString = function (e) {
                var n = new window.ActiveXObject("htmlfile");
                n.designMode = "on";
                n.open();
                n.write(e);
                n.close();
                return n;
              })
            : (e.prototype.parseFromString = function (e) {
                var n = document.implementation.createHTMLDocument("");
                n.open();
                n.write(e);
                n.close();
                return n;
              });
          return e;
        })();
  function A(e, n) {
    t =
      "string" == typeof e
        ? ((t = (() => {
            m = m || new y();
            return m;
          })().parseFromString(
            '<x-turndown id="turndown-root">' + e + "</x-turndown>",
            "text/html"
          )),
          t.getElementById("turndown-root"))
        : e.cloneNode(!0);
    var t,
      e = {
        element: t,
        isBlock: d,
        isVoid: p,
        isPre: n.preformattedCode ? v : null,
      },
      r = e.element,
      i = e.isBlock,
      o = e.isVoid,
      a =
        e.isPre ||
        function (e) {
          return "PRE" === e.nodeName;
        };
    if (r.firstChild && !a(r)) {
      for (var l = null, u = !1, c = null, s = g(c, r, a); s !== r; ) {
        if (3 === s.nodeType || 4 === s.nodeType) {
          var f = s.data.replace(/[ \r\n\t]+/g, " ");
          (l && !/ $/.test(l.data)) || u || " " !== f[0] || (f = f.substr(1));
          if (!f) {
            s = h(s);
            continue;
          }
          s.data = f;
          l = s;
        } else {
          if (1 !== s.nodeType) {
            s = h(s);
            continue;
          }
          if (i(s) || "BR" === s.nodeName) {
            l && (l.data = l.data.replace(/ $/, ""));
            l = null;
            u = !1;
          } else if (o(s) || a(s)) {
            l = null;
            u = !0;
          } else l && (u = !1);
        }
        (f = g(c, s, a)), (c = s), (s = f);
      }
      if (l) {
        l.data = l.data.replace(/ $/, "");
        l.data || h(l);
      }
    }
    return t;
  }
  function v(e) {
    return "PRE" === e.nodeName || "CODE" === e.nodeName;
  }
  function N(e, n) {
    e.isBlock = d(e);
    e.isCode = "CODE" === e.nodeName || e.parentNode.isCode;
    e.isBlank =
      ((t = e),
      !p(t) &&
        !((e) => o(e, i))(t) &&
        /^\s*$/i.test(t.textContent) &&
        !((e) => a(e, r))(t) &&
        !((e) => a(e, i))(t));
    var t;
    e.flankingWhitespace = ((e, n) => {
      if (e.isBlock || (n.preformattedCode && e.isCode))
        return { leading: "", trailing: "" };
      var t = ((e) => {
        var n = e.match(
          /^(([ \t\r\n]*)(\s*))(?:(?=\S)[\s\S]*\S)?((\s*?)([ \t\r\n]*))$/
        );
        return {
          leading: n[1],
          leadingAscii: n[2],
          leadingNonAscii: n[3],
          trailing: n[4],
          trailingNonAscii: n[5],
          trailingAscii: n[6],
        };
      })(e.textContent);
      t.leadingAscii && T("left", e, n) && (t.leading = t.leadingNonAscii);
      t.trailingAscii && T("right", e, n) && (t.trailing = t.trailingNonAscii);
      return { leading: t.leading, trailing: t.trailing };
    })(e, n);
    return e;
  }
  function T(e, n, t) {
    var r, i, o;
    if ("left" === e) {
      r = n.previousSibling;
      i = / $/;
    } else {
      r = n.nextSibling;
      i = /^ /;
    }
    r &&
      (3 === r.nodeType
        ? (o = i.test(r.nodeValue))
        : t.preformattedCode && "CODE" === r.nodeName
        ? (o = !1)
        : 1 !== r.nodeType || d(r) || (o = i.test(r.textContent)));
    return o;
  }
  var E = Array.prototype.reduce,
    R = [
      [/\\/g, "\\\\"],
      [/\*/g, "\\*"],
      [/^-/g, "\\-"],
      [/^\+ /g, "\\+ "],
      [/^(=+)/g, "\\$1"],
      [/^(#{1,6}) /g, "\\$1 "],
      [/`/g, "\\`"],
      [/^~~~/g, "\\~~~"],
      [/\[/g, "\\["],
      [/\]/g, "\\]"],
      [/^>/g, "\\>"],
      [/_/g, "\\_"],
      [/^(\d+)\. /g, "$1\\. "],
    ];
  function C(e) {
    if (!(this instanceof C)) return new C(e);
    var n = {
      rules: t,
      headingStyle: "setext",
      hr: "* * *",
      bulletListMarker: "*",
      codeBlockStyle: "indented",
      fence: "```",
      emDelimiter: "_",
      strongDelimiter: "**",
      linkStyle: "inlined",
      linkReferenceStyle: "full",
      br: "  ",
      preformattedCode: !1,
      blankReplacement: function (e, n) {
        return n.isBlock ? "\n\n" : "";
      },
      keepReplacement: function (e, n) {
        return n.isBlock ? "\n\n" + n.outerHTML + "\n\n" : n.outerHTML;
      },
      defaultReplacement: function (e, n) {
        return n.isBlock ? "\n\n" + e + "\n\n" : e;
      },
    };
    this.options = (function (e) {
      for (var n = 1; n < arguments.length; n++) {
        var t,
          r = arguments[n];
        for (t in r) r.hasOwnProperty(t) && (e[t] = r[t]);
      }
      return e;
    })({}, n, e);
    this.rules = new l(this.options);
  }
  C.prototype = {
    turndown: function (e) {
      var n, t;
      if (
        ((n = e),
        null == n ||
          ("string" != typeof n &&
            (!n.nodeType ||
              (1 !== n.nodeType && 9 !== n.nodeType && 11 !== n.nodeType))))
      )
        throw new TypeError(
          e + " is not a string, or an element/document/fragment node."
        );
      return "" === e
        ? ""
        : ((t = b.call(this, new A(e, this.options))),
          function (n) {
            var t = this;
            this.rules.forEach(function (e) {
              "function" == typeof e.append && (n = k(n, e.append(t.options)));
            });
            return n.replace(/^[\t\r\n]+/, "").replace(/[\t\r\n\s]+$/, "");
          }.call(this, t));
    },
    use: function (e) {
      if (Array.isArray(e)) for (var n = 0; n < e.length; n++) this.use(e[n]);
      else {
        if ("function" != typeof e)
          throw new TypeError(
            "plugin must be a Function or an Array of Functions"
          );
        e(this);
      }
      return this;
    },
    addRule: function (e, n) {
      this.rules.add(e, n);
      return this;
    },
    keep: function (e) {
      this.rules.keep(e);
      return this;
    },
    remove: function (e) {
      this.rules.remove(e);
      return this;
    },
    escape: function (e) {
      return R.reduce(function (e, n) {
        return e.replace(n[0], n[1]);
      }, e);
    },
  };
  function b(e) {
    var r = this;
    return E.call(
      e.childNodes,
      function (e, n) {
        n = new N(n, r.options);
        var t = "";
        3 === n.nodeType
          ? (t = n.isCode ? n.nodeValue : r.escape(n.nodeValue))
          : 1 === n.nodeType &&
            (t = function (e) {
              var n = this.rules.forNode(e),
                t = b.call(this, e),
                r = e.flankingWhitespace;
              (r.leading || r.trailing) && (t = t.trim());
              return r.leading + n.replacement(t, e, this.options) + r.trailing;
            }.call(r, n));
        return k(e, t);
      },
      ""
    );
  }
  function k(e, n) {
    var t = ((e) => {
        for (var n = e.length; 0 < n && "\n" === e[n - 1]; ) n--;
        return e.substring(0, n);
      })(e),
      r = n.replace(/^\n*/, ""),
      i = Math.max(e.length - t.length, n.length - r.length),
      i = "\n\n".substring(0, i);
    return t + i + r;
  }
  return C;
});
//# sourceMappingURL=turndown.browser.umd.js.map
