import template from './rootpage-template.pug';
import HeaderSection from '../header-section/header-section.js';
import IntroSection from '../intro-section/intro-section.js';
import WorkSection from '../work-section/work-section.js';
import BlogSection from '../blog-section/blog-section.js';


import '../baseStyle.less';

export default class RootPage {
    render() {
        var htmlContent = template();
        var htmlObject = $($.parseHTML(htmlContent));

        // Rendering HeaderSection
        var headerSection = new HeaderSection();
        var headerSectionContent = headerSection.render();

        htmlObject.find('.header-section').html(headerSectionContent);


        // Rendering IntroSection
        var introSection = new IntroSection();
        var introSectionContent = introSection.render();

        htmlObject.find('.intro-section').html(introSectionContent);

        // Rendering WorkSection
        var workSection = new WorkSection();
        var workSectionContent = workSection.render();

        htmlObject.find('.work-section').html(workSectionContent);

        //Rendering BlogSection
        var blogSection = new BlogSection();
        var blogSectionContent = blogSection.render();

        htmlObject.find('.blog-section').html(blogSectionContent);

        return htmlObject;
    }
}