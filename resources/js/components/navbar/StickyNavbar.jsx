import React, { useState, useEffect } from 'react';
import TourDetail from '../tour/TourDetail';
import {
  Navbar,
  MobileNav,
  Typography,
  Button,
  IconButton,
  Card,
} from "@material-tailwind/react";
import {
  ArrowUturnDownIcon,
  ArrowUturnUpIcon 
} from "@heroicons/react/24/solid";
 
export default function StickyNavbar() {
  const [openNav, setOpenNav] = useState(false);
  const [openDetails, setOpenDetails] = useState(false);
 
  useEffect(() => {
    window.addEventListener(
      "resize",
      () => window.innerWidth >= 960 && setOpenNav(false)
    );
  }, []);
 
  const navList = (
    <ul className="mb-4 mt-2 flex flex-col gap-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
      <Typography
        as="li"
        variant="small"
        color="blue-gray"
        className="p-1 font-normal"
      >
        <a href="/" className="flex items-center">
          Home
        </a>
      </Typography>
      <Typography
        as="li"
        variant="small"
        color="blue-gray"
        className="p-1 font-normal"
      >
        <a href="/beer-tours" className="flex items-center">
          Tours
        </a>
      </Typography>
      <Typography
        as="li"
        variant="small"
        color="blue-gray"
        className="p-1 font-normal"
      >
        <a href="#" className="cursor-not-allowed flex items-center">
          Blog
        </a>
      </Typography>
      <Typography
        as="li"
        variant="small"
        color="blue-gray"
        className="p-1 font-normal"
      >
        <a href="#" className="cursor-not-allowed flex items-center">
          About
        </a>
      </Typography>
      <Typography
        as="li"
        variant="small"
        color="blue-gray"
        className="p-1 font-normal"
      >
        <a href="#" className="cursor-not-allowed flex items-center">
          Contact
        </a>
      </Typography>
    </ul>
  );
 
  return (
    <>
      <Navbar className="sticky inset-0 z-10 h-max max-w-full rounded-none py-2 px-4 lg:px-8 lg:py-4">
        <div className="flex items-center justify-between text-blue-gray-900">
            <div className="flex flex-shrink-0 items-center">
              <a href="/">
                <img
                className="block h-8 w-auto lg:hidden"
                src="/img/logo_horizontal_pureText_color.png"
                alt="Prague Beer Guides logo"
                />
              </a>
              <a href="/">
                <img
                  className="hidden h-8 w-auto lg:block"
                  src="/img/logo_horizontal_pureText_color.png"
                  alt="Prague Beer Guides logo"
                />
              </a>
            </div>
          <div className="flex items-center gap-4">
            <div className="mr-4 hidden lg:block">{navList}</div>
            <a href="/login">
              <Button
              variant="gradient"
              size="sm"
              className="hidden lg:inline-block"
            >
              <span>Admin</span>
            </Button>
            </a>
            <IconButton
              variant="text"
              className="ml-auto h-6 w-6 text-inherit hover:bg-transparent focus:bg-transparent active:bg-transparent lg:hidden"
              ripple={false}
              onClick={() => setOpenNav(!openNav)}
            >
              {openNav ? (
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  className="h-6 w-6"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  strokeWidth={2}
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>
              ) : (
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  className="h-6 w-6"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth={2}
                >
                  <path
                    strokeLinecap="round"
                    strokeLinejoin="round"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              )}
            </IconButton>
          </div>
        </div>
        <MobileNav open={openNav}>
          {navList}
          <a href="/login">
            <Button 
            variant="gradient" 
            size="sm" fullWidth 
            className="mb-2"
            >  
              <span>Admin</span>
            </Button>
          </a>
        </MobileNav>
      </Navbar>
      <div className="mx-auto max-w-screen-md py-12">
        <Card className="mb-12 overflow-hidden">
          <img
            alt="nature"
            className="h-[32rem] w-full object-cover object-center"
            src="https://images.unsplash.com/photo-1575037614876-c38a4d44f5b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
          />
        </Card>
        <Typography variant="h1" color="blue-gray" className="my-8 px-4 text-center">
          Prague Beer Tours
        </Typography>
        <Typography color="gray" className="px-4 text-justify font-normal text-xl">
        Discover the best hidden local pubs carefully selected by a beer sommelier, and enjoy some of the finest Czech beers in great company.
        </Typography>
      </div>
    </>
  );
}