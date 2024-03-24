export default () => ({
    skip: 1,
    whenHoverCarousel: false,

    next() {
        this.to((current, offset) => current + (offset * this.skip))
    },
    prev() {
        this.to((current, offset) => current - (offset * this.skip))
    },
    to(strategy) {
        let slider = this.$refs.slider
        let sliderContent = this.$refs.sliderContent
        let current = slider.scrollLeft
        let offset = sliderContent.getBoundingClientRect().width
        console.log(offset)
        slider.scrollTo({
            left: strategy(current, offset),
            behavior: 'smooth'
        })
    },
})
