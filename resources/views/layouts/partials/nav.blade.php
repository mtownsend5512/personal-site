<nav class="desktop-nav mt-2 -mb-4 font-bold text-sm tracking-wider hidden lg:block uppercase">
	<a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
	<a class="{{ request()->is('portfolio') ? 'active' : '' }}" href="/portfolio">Portfolio</a>
	<a target="_blank" class="{{ request()->is('open-source') ? 'active' : '' }}" href="https://packagist.org/packages/mtownsend/">Open Source</a>
	<a class="{{ request()->is('talks') ? 'active' : '' }}" href="talks">Talks</a>
	<a class="{{ request()->is('writing') ? 'active' : '' }}" href="/writing">Writing</a>
	<a target="_blank" class="{{ request()->is('resume') ? 'active' : '' }}" href="https://my.indeed.com/p/mark_t-ownsend">Resume</a>
	<a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
</nav>