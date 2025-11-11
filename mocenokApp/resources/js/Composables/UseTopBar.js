import { ref, onMounted, onUnmounted } from 'vue'

const isTopBarHidden = ref(false)
const TOP_BAR_HEIGHT = 40

export function useTopBar() {
    let lastScrollY = 0
    let ticking = false

    const handleScroll = () => {
        const currentScrollY = window.scrollY

        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (currentScrollY > lastScrollY && currentScrollY > 100) {
                    isTopBarHidden.value = true
                } else if (currentScrollY < lastScrollY) {
                    isTopBarHidden.value = false
                }

                lastScrollY = currentScrollY
                ticking = false
            })

            ticking = true
        }
    }

    const setupScrollListener = () => {
        window.addEventListener('scroll', handleScroll, { passive: true })
    }

    const cleanupScrollListener = () => {
        window.removeEventListener('scroll', handleScroll)
    }

    return {
        isTopBarHidden,
        TOP_BAR_HEIGHT,
        setupScrollListener,
        cleanupScrollListener
    }
}
