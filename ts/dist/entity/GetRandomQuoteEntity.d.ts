import { KanyerestEntityBase } from '../KanyerestEntityBase';
import type { KanyerestSDK } from '../KanyerestSDK';
import type { Control } from '../types';
import type { GetRandomQuote, GetRandomQuoteLoadMatch } from '../KanyerestTypes';
declare class GetRandomQuoteEntity extends KanyerestEntityBase<GetRandomQuote> {
    constructor(client: KanyerestSDK, entopts: any);
    make(this: GetRandomQuoteEntity): GetRandomQuoteEntity;
    load(this: any, reqmatch?: GetRandomQuoteLoadMatch, ctrl?: Control): Promise<GetRandomQuoteEntity>;
}
export { GetRandomQuoteEntity };
