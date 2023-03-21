export function nav() {
    return (
        <>
            <nav className="header">
                <ul
                    className="header_links"
                    style="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8"
                >
                    <li className="header_links-select">Private Tours</li>
                    <li className="header_links-select">Book a Tour</li>
                    <li className="header_links-select">Gift Cards</li>
                    <li className="header_links-select">Blog</li>
                    <li className="header_links-select">About Us</li>
                </ul>
            </nav>
        </>
    );
}
