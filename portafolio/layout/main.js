class DataTable{
    element;
    headers;
    items;
    copyItems
    selected;
    pagination;
    numberOfEntiries;
    headerButtons;

    constructor(selector, headerButtons){
        this.element = document.querySelector(selector);

        this.headers = [];
        this.items = [];
        this.pagination = {
            total: 0, 
            noItemsPerPage: 0, 
            noPages: 0, actual: 0, 
            pointer: 0, diff: 0, 
            lastPageBeforeDots: 0, 
            noButtonsBeForeDots: 4
         };

         this.selected = [];
         this.numberOfEntries = 5;
         this.headerButtons = headerButtons;
    }

    parce(){
        const headers = [... this.element.querySelector('thead tr').children];
        const trs = [... this.element.querySelector('tbody').children];

        headers.forEach(element=>{
            this.headers.push(element.textContent);
        });

        trs.forEach(tr=>{
            const cells = [... tr.children];

            const item = {
                id: this.generateUUID(),
                values:[]
            };

            cells.forEach(cell =>{
                if(cell.children.length > 0){
                    //const status = [... cell.children][0].getAttribute('class');
                    const statusElement = [... cell.children][0];
                    const status = statusElement.getAttribute('class');
                    if(status != null){
                        item.values.push(`<span class='${status}'></span>`);
                    }
                }else{
                    item.values.push(cell.textContent);
                }
            });
            this.items.push(item);
        });
        console.log(this.items);

        this.copyItems.makeTable();
    }

    generateUUID(){
        return (Date.now() * Math.floor(Math.random() * 100000)).toString();
    }
}