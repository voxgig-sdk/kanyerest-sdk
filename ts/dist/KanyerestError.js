"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.KanyerestError = void 0;
class KanyerestError extends Error {
    isKanyerestError = true;
    sdk = 'Kanyerest';
    code;
    ctx;
    status = -1;
    // `err.notFound` rather than a magic number at every call site.
    get notFound() { return 404 === this.status; }
    constructor(code, msg, ctx) {
        super(msg);
        this.code = code;
        this.ctx = ctx;
    }
}
exports.KanyerestError = KanyerestError;
//# sourceMappingURL=KanyerestError.js.map