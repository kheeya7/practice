import template from './work-section-template.pug';
import workItemImage01 from './work-01.jpg';
import workItemImage02 from './work-02.jpg';
import workItemImage03 from './work-03.jpg';

export default class WorkSection {
    render() {
        var htmlContent = template({
            workItemImageSrc01: workItemImage01,
            workItemImageSrc02: workItemImage02,
            workItemImageSrc03: workItemImage03
        });
        
        return htmlContent;
    }
}

