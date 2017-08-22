import template from './first.pug';

export default class CoolItems {
    render() {
        var itemData = [
            {
                title: 'This is the title, yo',
                description: 'This is the spot for description.',
                price: 100,
                buttonDescription: 'Pick me'
            },
            {
                title: 'This is another title, yo',
                description: 'This is the spot for another description.',
                price: 800,
                buttonDescription: 'choose me'
            },
            {
                title: 'This is the last title, yo',
                description: 'This is the spot for the last description.',
                price: 1000,
                buttonDescription: 'Pick me up'
            }    
        ];

        var htmlResult = template({items: itemData});

        return htmlResult;
    }
}