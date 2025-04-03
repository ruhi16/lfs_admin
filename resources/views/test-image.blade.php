<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Little Flower School ID Card</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
        display: flex;
        justify-content: center;

        align-items: right;
        min-height: 100vh;
        margin: 0;
        background-color: #f0f0f0;
        font-family: sans-serif;
    }

    .page {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .card {
        width: 350px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        position: relative;
        overflow: hidden;
    }

    .header {
        background-color: #333;
        /* Dark background */
        color: white;
        /* White text */
        text-align: center;
        padding: 10px;
        border-radius: 8px 8px 0 0;
    }

    .header h1 {
        margin: 0;
        font-size: 1.5em;
        font-weight: bold;
    }

    h2 {
        margin: 10;
        font-size: 1.2rem;
        align-items: center;
        
        font-weight: bold;
    }

    .header-details {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 10px;
    }

    .logo img {
        width: 60px;
        height: 60px;
        /* border-block: 5px solid #ccc; */
        border-radius: 50%;
        margin-right: 10px;
    }

    .logo svg {
        width: 60px;
        height: 60px;
        /* border-block: 5px solid #ccc; */
        border-radius: 50%;
        margin-right: 10px;
    }

    .school-info {
        text-align: left;
    }

    .english-medium {
        background-color: #ffeb3b;
        color: black;
        padding: 2px 5px;
        border-radius: 5px;
        font-size: 0.8em;
        display: inline-block;
        margin-top: 5px;
    }

    .estd {
        font-size: 0.8em;
        margin-top: 5px;
    }

    .address,
    .contact {
        text-align: center;
        font-size: 0.9em;
        margin-bottom: 2px;
    }

    .photo-container {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        gap: 20px;
        justify-content: space-;

        /* align-items: right; */
        margin-bottom: 15px;
    }

    .photo-placeholder-main {
        width: 80px;
        height: 100px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }

    .photo-placeholder {
        width: 80px;
        height: 80px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
    }

    .name {
        font-weight: bold;
        font-size: 1.1em;
    }

    .details {
        font-size: 0.9em;
    }

    .detail-row {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }

    .detail-label {
        font-weight: bold;
        margin-right: 5px;
    }

    .detail-value {
        flex-grow: 1;
        border-bottom: 1px dotted #ccc;
        padding-bottom: 2px;
    }

    .signature {
        text-align: right;
        margin-top: 15px;
    }

    .signature img {
        width: 100px;
        height: 40px;
    }

    .signature-label {
        font-size: 0.8em;
    }

    .card::before {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 20px;
        background: linear-gradient(to right, #ffeb3b, #ff9800);
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }
    </style>
</head>

<body>
    <div class="page">
        <div class="card">
            <div class="header">
                <h1>LITTLE FLOWER SCHOOL</h1>
                <div class="header-details">
                    <div class="logo">
                        

                        
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="1080" height="1080" viewBox="0 0 1080 1080" xml:space="preserve">
                        <desc>Created with Fabric.js 5.2.4</desc>
                        <defs>
                        </defs>
                        <rect x="0" y="0" width="100%" height="100%" fill="transparent"></rect>
                        <g transform="matrix(1 0 0 1 540 540)" id="3558e061-d186-4e90-92de-45fc111cc8b5"  >
                        <rect style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  x="-540" y="-540" rx="0" ry="0" width="1080" height="1080" />
                        </g>
                        <g transform="matrix(1 0 0 1 540 540)" id="b37ccf00-55ba-44dc-83f5-4f29e459bae4"  >
                        </g>
                        <g transform="matrix(4.03 0 0 4.03 540 540)"  >
                        <g style="opacity: 1;" vector-effect="non-scaling-stroke"   >
                                <g transform="matrix(0.13 0 0 -0.13 0 0)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1406.38, -1574.31)" d="M 1337 2543 C 1335 2542 1289 2531 1234 2520 C 1117 2496 1071 2480 970 2428 C 875 2378 809 2328 717 2231 C 465 1967 389 1559 526 1210 C 610 995 781 809 989 705 C 1355 521 1787 593 2078 887 C 2200 1010 2279 1150 2329 1330 C 2351 1413 2355 1444 2354 1570 C 2354 1669 2349 1736 2338 1780 C 2283 2000 2169 2187 2009 2318 C 1865 2436 1735 2492 1509 2534 C 1496 2537 1485 2539 1485 2540 C 1485 2544 1340 2546 1337 2543 z M 1408 2498 C 1415 2491 1420 2473 1420 2458 C 1420 2443 1425 2430 1430 2430 C 1436 2430 1440 2436 1440 2444 C 1440 2470 1460 2511 1469 2506 C 1481 2498 1447 2377 1432 2372 C 1426 2370 1416 2388 1409 2414 C 1397 2462 1380 2467 1380 2422 C 1380 2388 1364 2362 1352 2375 C 1344 2384 1310 2480 1310 2494 C 1310 2497 1316 2500 1324 2500 C 1332 2500 1340 2484 1344 2460 C 1351 2412 1370 2416 1370 2464 C 1370 2509 1384 2522 1408 2498 z M 1588 2486 C 1601 2473 1576 2462 1551 2470 C 1535 2474 1519 2476 1516 2472 C 1503 2460 1511 2450 1533 2450 C 1562 2450 1584 2435 1576 2422 C 1571 2414 1561 2414 1543 2421 C 1514 2432 1505 2428 1513 2405 C 1517 2396 1532 2390 1550 2390 C 1570 2390 1580 2385 1580 2375 C 1580 2363 1572 2361 1538 2366 C 1514 2370 1492 2375 1489 2379 C 1486 2382 1486 2411 1488 2444 L 1492 2502 L 1538 2496 C 1563 2493 1585 2488 1588 2486 z M 1173 2459 C 1165 2443 1160 2420 1163 2410 C 1166 2399 1162 2389 1154 2386 C 1144 2382 1140 2390 1140 2415 C 1140 2434 1136 2450 1130 2450 C 1125 2450 1120 2455 1120 2461 C 1120 2467 1128 2470 1138 2468 C 1148 2465 1161 2469 1168 2477 C 1188 2498 1190 2492 1173 2459 z M 1294 2468 C 1316 2437 1314 2410 1288 2383 C 1230 2321 1148 2396 1200 2463 C 1227 2497 1272 2500 1294 2468 z M 1693 2452 C 1712 2432 1707 2400 1685 2400 C 1676 2400 1678 2389 1692 2360 C 1716 2312 1722 2310 1719 2353 C 1717 2388 1729 2450 1739 2450 C 1751 2450 1775 2430 1763 2430 C 1757 2430 1748 2421 1745 2409 C 1734 2376 1803 2287 1824 2307 C 1827 2310 1814 2331 1794 2352 C 1766 2384 1761 2394 1771 2406 C 1777 2414 1789 2420 1798 2420 C 1819 2420 1860 2381 1860 2361 C 1860 2351 1851 2355 1830 2375 C 1788 2415 1779 2397 1820 2356 C 1853 2321 1855 2295 1825 2284 C 1803 2275 1761 2306 1754 2335 C 1751 2349 1744 2360 1739 2360 C 1727 2360 1728 2333 1740 2309 C 1746 2299 1747 2290 1743 2290 C 1727 2291 1672 2346 1656 2378 C 1637 2414 1620 2412 1620 2374 C 1620 2358 1615 2350 1608 2352 C 1596 2356 1595 2454 1607 2473 C 1615 2486 1673 2472 1693 2452 z M 1114 2399 C 1120 2356 1124 2349 1138 2355 C 1174 2370 1190 2372 1190 2361 C 1190 2350 1174 2342 1123 2326 C 1100 2319 1101 2318 1085 2413 C 1081 2441 1082 2450 1093 2450 C 1103 2450 1110 2433 1114 2399 z M 1070 2421 C 1070 2416 1057 2407 1040 2400 C 1024 2393 1010 2381 1010 2374 C 1010 2358 1026 2355 1035 2370 C 1043 2383 1070 2383 1070 2370 C 1070 2364 1059 2354 1045 2348 C 1023 2338 1020 2332 1025 2308 C 1030 2287 1028 2280 1017 2280 C 1007 2280 1000 2295 995 2326 C 992 2352 986 2378 984 2384 C 982 2390 997 2404 1017 2416 C 1054 2436 1070 2437 1070 2421 z M 963 2373 C 966 2363 971 2338 975 2318 C 978 2297 987 2274 995 2267 C 1007 2255 1004 2249 977 2230 C 946 2208 946 2208 964 2228 C 981 2248 982 2252 968 2268 C 959 2277 955 2290 957 2297 C 959 2303 957 2311 951 2314 C 945 2318 943 2327 947 2335 C 950 2344 947 2356 941 2364 C 935 2371 933 2380 937 2383 C 948 2395 958 2391 963 2373 z M 930 2348 C 930 2341 916 2327 900 2318 C 883 2309 870 2296 870 2290 C 870 2275 886 2278 900 2295 C 913 2311 940 2316 940 2302 C 940 2297 927 2284 910 2272 C 879 2249 871 2230 892 2230 C 898 2230 912 2237 922 2247 C 932 2256 943 2260 948 2255 C 952 2251 940 2236 922 2221 C 903 2207 870 2178 848 2157 C 826 2137 804 2122 800 2125 C 795 2128 788 2145 785 2163 C 781 2180 773 2200 768 2207 C 758 2219 765 2240 779 2240 C 783 2240 792 2222 799 2200 C 811 2158 824 2149 834 2175 C 837 2183 847 2190 856 2190 C 869 2190 871 2197 865 2228 C 861 2248 853 2271 847 2279 C 838 2290 844 2300 875 2326 C 918 2362 930 2367 930 2348 z M 1937 2338 C 1960 2316 1968 2280 1950 2280 C 1945 2280 1940 2286 1940 2293 C 1940 2301 1931 2315 1920 2325 C 1901 2342 1900 2342 1889 2317 C 1874 2284 1892 2249 1923 2253 C 1952 2256 1953 2226 1924 2222 C 1900 2219 1860 2261 1860 2291 C 1860 2324 1879 2360 1897 2360 C 1906 2360 1924 2350 1937 2338 z M 1601 2322 C 1758 2275 1891 2183 1988 2052 C 2097 1905 2143 1763 2143 1575 C 2143 1385 2096 1243 1984 1094 C 1819 874 1532 761 1278 815 C 987 876 773 1089 695 1396 C 671 1487 671 1660 694 1754 C 782 2117 1087 2360 1435 2346 C 1493 2343 1563 2333 1601 2322 z M 1650 2340 C 1650 2335 1648 2330 1646 2330 C 1643 2330 1638 2335 1635 2340 C 1632 2346 1634 2350 1639 2350 C 1645 2350 1650 2346 1650 2340 z M 1084 2315 C 1087 2307 1081 2296 1071 2290 C 1055 2282 1053 2284 1053 2305 C 1053 2332 1074 2339 1084 2315 z M 835 2238 C 840 2212 839 2200 831 2200 C 825 2200 820 2208 820 2218 C 820 2228 811 2242 800 2250 C 782 2263 782 2265 797 2282 C 817 2304 824 2295 835 2238 z M 2005 2290 C 2009 2284 2006 2272 1999 2264 C 1990 2253 1991 2246 2005 2230 C 2028 2204 2040 2205 2040 2231 C 2040 2248 2043 2250 2054 2241 C 2065 2232 2064 2221 2046 2175 C 2023 2116 2004 2101 2014 2150 C 2019 2179 2004 2220 1988 2220 C 1983 2220 1980 2211 1980 2201 C 1980 2180 1965 2165 1956 2178 C 1950 2189 1981 2300 1991 2300 C 1995 2300 2002 2295 2005 2290 z M 1875 2225 C 1895 2205 1915 2191 1918 2194 C 1920 2197 1932 2188 1943 2174 C 1953 2160 1968 2151 1975 2154 C 1983 2157 1990 2147 1994 2129 C 1997 2113 2006 2100 2014 2100 C 2021 2100 2033 2087 2040 2070 C 2047 2054 2062 2034 2075 2026 C 2087 2018 2100 1999 2103 1983 C 2106 1968 2119 1939 2133 1919 C 2146 1899 2161 1861 2165 1834 C 2174 1772 2186 1750 2209 1750 C 2234 1750 2240 1770 2230 1815 C 2223 1847 2225 1861 2244 1897 L 2267 1940 L 2289 1865 C 2333 1719 2353 1560 2328 1560 C 2318 1560 2318 1558 2328 1551 C 2345 1541 2330 1421 2299 1309 C 2277 1231 2207 1082 2159 1015 C 2126 967 2045 880 2035 880 C 2028 880 2076 949 2091 960 C 2102 968 2082 1010 2067 1010 C 2060 1010 2040 1022 2023 1038 L 1992 1065 L 2024 1110 C 2089 1201 2112 1253 2150 1390 C 2174 1480 2177 1620 2156 1730 C 2148 1771 2144 1808 2146 1812 C 2149 1816 2146 1820 2141 1820 C 2135 1820 2130 1825 2130 1832 C 2130 1857 2040 2027 2006 2067 C 1986 2089 1970 2116 1970 2125 C 1970 2134 1966 2139 1961 2136 C 1956 2133 1939 2145 1923 2163 C 1908 2180 1875 2210 1850 2228 C 1826 2245 1813 2260 1822 2260 C 1830 2260 1854 2244 1875 2225 z M 750 2175 C 740 2163 740 2152 754 2115 C 764 2091 769 2066 765 2060 C 755 2043 743 2057 736 2096 C 728 2138 713 2136 688 2092 C 671 2061 671 2059 690 2027 C 710 1994 716 1960 702 1960 C 698 1960 688 1978 679 2000 C 665 2039 664 2040 649 2022 C 634 2004 634 1999 656 1954 C 682 1900 684 1890 671 1890 C 666 1890 650 1912 636 1940 L 610 1989 L 636 2037 C 683 2124 745 2209 754 2200 C 759 2194 758 2185 750 2175 z M 889 2153 C 822 2083 778 2023 743 1955 C 605 1685 623 1364 790 1119 C 826 1066 827 1063 809 1052 C 799 1045 790 1034 790 1027 C 790 1019 779 1003 765 990 C 737 963 733 942 755 934 C 763 930 770 922 770 914 C 770 906 779 895 790 888 C 801 881 810 872 810 867 C 810 863 823 847 838 832 C 876 795 834 826 788 869 C 768 888 753 908 756 912 C 759 916 754 920 746 920 C 737 920 712 944 690 973 C 668 1001 646 1030 642 1035 C 617 1067 567 1166 542 1235 C 504 1337 490 1430 490 1572 C 490 1707 502 1797 531 1882 C 553 1948 631 2103 638 2096 C 640 2093 635 2079 627 2063 C 587 1987 587 1985 609 1942 C 636 1890 636 1871 610 1895 C 593 1910 588 1911 574 1899 C 555 1883 560 1848 590 1797 C 613 1759 630 1751 648 1773 C 662 1790 694 1900 692 1926 C 691 1940 698 1950 710 1953 C 734 1959 736 1989 715 2030 C 707 2046 703 2066 707 2076 C 713 2091 714 2091 721 2071 C 726 2059 736 2047 745 2044 C 767 2035 792 2060 787 2086 C 784 2102 787 2106 799 2103 C 808 2101 838 2121 869 2150 C 937 2213 949 2215 889 2153 z M 2119 2164 C 2144 2132 2146 2083 2124 2052 C 2103 2022 2093 2024 2070 2063 C 2047 2100 2045 2128 2062 2165 C 2076 2197 2093 2197 2119 2164 z M 2189 2044 C 2214 2012 2216 1970 2195 1930 C 2177 1894 2169 1893 2151 1922 C 2124 1965 2120 2001 2136 2037 C 2156 2077 2162 2078 2189 2044 z M 2250 1970 C 2262 1947 2262 1946 2247 1959 C 2237 1966 2230 1979 2230 1988 C 2230 2006 2233 2004 2250 1970 z M 2240 1938 C 2240 1931 2230 1910 2219 1891 C 2200 1860 2199 1852 2210 1817 C 2216 1796 2219 1776 2216 1773 C 2205 1762 2192 1782 2186 1819 C 2181 1850 2185 1870 2202 1905 C 2223 1949 2240 1963 2240 1938 z M 606 1858 L 623 1825 L 632 1853 C 644 1886 665 1890 656 1858 C 652 1845 647 1823 644 1808 C 640 1792 634 1780 630 1780 C 620 1780 580 1856 580 1875 C 580 1898 588 1893 606 1858 z M 846 1023 C 864 999 863 987 845 993 C 837 997 828 995 825 990 C 822 985 806 971 790 960 C 769 945 760 943 760 952 C 760 959 774 974 790 985 C 810 998 819 1011 816 1023 C 814 1032 817 1040 822 1040 C 828 1040 839 1032 846 1023 z M 2010 1033 C 2010 1030 2003 1019 1994 1009 C 1984 998 1982 990 1989 985 C 1995 982 2003 986 2006 994 C 2013 1011 2040 1016 2040 1000 C 2040 995 2032 987 2023 981 C 2009 974 2008 968 2017 959 C 2026 950 2031 953 2042 969 C 2049 980 2058 990 2062 990 C 2076 990 2071 969 2052 945 L 2034 922 L 1996 957 C 1961 989 1959 994 1971 1016 C 1982 1038 2010 1050 2010 1033 z M 880 981 C 880 976 873 967 865 960 C 854 951 852 944 860 936 C 867 929 874 932 884 946 C 892 956 901 962 905 958 C 914 949 839 860 828 866 C 823 870 826 880 834 889 C 850 907 855 930 843 930 C 840 930 828 923 818 913 C 781 880 787 911 825 950 C 863 989 880 999 880 981 z M 2015 902 C 2006 900 1993 903 1986 909 C 1966 926 1958 909 1976 889 C 1991 873 1989 869 1958 841 C 1940 824 1923 811 1920 811 C 1917 811 1902 829 1887 852 L 1858 893 L 1879 913 C 1904 938 1920 928 1897 902 C 1878 881 1886 864 1907 882 C 1914 888 1924 889 1928 885 C 1932 881 1929 875 1923 873 C 1916 870 1910 862 1910 853 C 1910 845 1915 841 1923 844 C 1929 847 1943 853 1952 856 C 1968 862 1966 867 1939 902 C 1909 939 1908 942 1925 960 C 1942 979 1943 978 1987 942 C 2018 916 2027 904 2015 902 z M 1000 898 C 1000 882 984 893 955 928 L 925 964 L 962 935 C 983 918 1000 902 1000 898 z M 1890 957 C 1890 955 1875 941 1858 924 L 1825 895 L 1854 928 C 1882 958 1890 965 1890 957 z M 945 910 C 966 887 958 871 935 890 C 913 908 904 894 925 873 C 946 853 928 841 904 860 C 883 878 874 863 893 842 C 925 807 909 799 872 830 L 848 849 L 882 890 C 900 912 918 930 921 930 C 924 930 935 921 945 910 z M 1200 809 C 1239 796 1247 791 1228 791 C 1200 790 1037 861 1025 879 C 1022 885 1047 876 1081 858 C 1116 841 1169 819 1200 809 z M 1798 879 C 1788 874 1780 861 1779 852 C 1779 843 1776 840 1774 847 C 1768 860 1744 854 1720 835 C 1702 820 1608 790 1583 790 C 1573 790 1594 801 1630 814 C 1666 826 1718 848 1745 862 C 1794 887 1832 899 1798 879 z M 1875 844 C 1913 798 1916 772 1881 804 C 1854 828 1833 815 1856 789 C 1865 778 1870 767 1866 763 C 1858 755 1835 782 1806 832 C 1787 864 1804 873 1826 843 C 1843 819 1858 835 1842 860 C 1830 880 1827 890 1834 890 C 1836 890 1854 870 1875 844 z M 1014 864 C 1023 861 1030 852 1030 844 C 1030 827 1018 826 1002 842 C 993 851 990 850 990 838 C 990 829 995 818 1000 815 C 1006 811 1007 804 1004 798 C 1000 792 994 792 987 799 C 978 808 971 805 958 788 C 949 775 938 769 934 773 C 929 777 931 789 938 798 C 945 807 958 827 968 842 C 986 872 990 873 1014 864 z M 1060 834 C 1060 830 1050 812 1039 793 C 1024 769 1021 755 1028 748 C 1035 741 1045 750 1060 780 C 1076 812 1085 820 1098 815 C 1107 811 1123 805 1133 803 C 1153 797 1156 774 1136 767 C 1128 764 1119 748 1115 732 C 1112 715 1102 699 1094 696 C 1076 689 1076 704 1096 741 C 1104 758 1109 779 1105 788 C 1100 801 1094 795 1077 765 C 1051 720 1041 715 1015 734 C 995 748 995 749 1017 794 C 1030 819 1044 840 1050 840 C 1055 840 1060 837 1060 834 z M 1768 812 C 1770 805 1765 800 1756 800 C 1747 800 1740 795 1740 789 C 1740 783 1749 780 1759 783 C 1771 786 1786 780 1796 769 C 1813 750 1813 748 1792 728 C 1775 710 1769 709 1756 720 C 1734 737 1736 749 1760 743 C 1771 740 1780 742 1780 748 C 1780 754 1770 760 1759 762 C 1728 766 1713 794 1730 814 C 1744 832 1761 831 1768 812 z M 1721 752 C 1744 699 1739 688 1705 720 C 1685 739 1680 740 1680 727 C 1680 718 1685 708 1690 705 C 1704 696 1703 677 1688 682 C 1677 686 1638 790 1648 790 C 1651 790 1667 778 1682 763 C 1712 735 1719 742 1695 774 C 1677 797 1675 814 1691 804 C 1697 801 1710 777 1721 752 z M 1173 744 C 1165 719 1160 696 1163 693 C 1174 682 1188 701 1194 735 C 1198 754 1206 770 1211 770 C 1222 770 1214 718 1198 688 C 1189 669 1181 667 1156 676 C 1136 684 1136 707 1155 754 C 1177 806 1192 798 1173 744 z M 1305 780 C 1313 767 1300 767 1280 780 C 1267 788 1267 790 1282 790 C 1291 790 1302 786 1305 780 z M 1555 780 C 1552 775 1545 770 1539 770 C 1534 770 1530 775 1530 780 C 1530 786 1537 790 1546 790 C 1554 790 1558 786 1555 780 z M 982 756 C 986 735 984 733 970 743 C 956 751 955 756 964 766 C 970 773 976 779 976 780 C 977 780 980 769 982 756 z M 1419 777 C 1417 776 1408 769 1399 762 C 1386 752 1380 753 1370 765 C 1359 778 1362 780 1390 780 C 1409 780 1421 779 1419 777 z M 1472 768 C 1463 759 1457 759 1448 768 C 1439 777 1441 780 1460 780 C 1479 780 1481 777 1472 768 z M 1650 722 C 1660 693 1663 671 1658 672 C 1653 674 1640 699 1631 728 C 1621 757 1617 779 1623 777 C 1629 775 1641 750 1650 722 z M 1271 760 C 1292 748 1296 720 1279 703 C 1271 695 1271 686 1279 671 C 1289 654 1288 650 1275 650 C 1267 650 1260 659 1260 669 C 1260 701 1241 704 1230 674 C 1211 625 1207 658 1224 715 C 1243 775 1243 775 1271 760 z M 1598 758 C 1616 740 1613 731 1591 737 C 1566 743 1556 726 1570 700 C 1581 679 1610 672 1610 690 C 1610 696 1606 700 1600 700 C 1595 700 1590 705 1590 710 C 1590 726 1617 721 1624 704 C 1634 679 1631 671 1609 660 C 1569 638 1527 704 1555 746 C 1572 773 1581 775 1598 758 z M 1530 745 C 1530 737 1521 730 1510 730 C 1499 730 1490 726 1490 720 C 1490 715 1499 710 1510 710 C 1521 710 1530 706 1530 700 C 1530 695 1523 690 1514 690 C 1505 690 1500 684 1503 678 C 1505 671 1517 666 1528 668 C 1543 670 1550 666 1550 656 C 1550 634 1494 634 1486 656 C 1483 665 1480 689 1480 710 C 1480 747 1485 753 1523 759 C 1527 759 1530 753 1530 745 z M 1359 735 C 1358 730 1349 726 1338 728 C 1312 733 1315 714 1342 707 C 1364 701 1360 685 1337 685 C 1316 685 1318 665 1340 662 C 1371 657 1364 640 1330 640 C 1303 640 1300 643 1300 673 C 1300 731 1310 751 1337 748 C 1350 746 1360 741 1359 735 z M 1455 740 C 1459 734 1463 712 1465 690 C 1470 647 1453 628 1419 637 C 1404 641 1400 652 1400 689 C 1400 715 1403 740 1407 743 C 1417 754 1448 751 1455 740 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -21.49 -113.49)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1245.22, -2425.51)" d="M 1228 2459 C 1206 2446 1205 2407 1226 2389 C 1259 2362 1298 2422 1270 2456 C 1256 2472 1251 2473 1228 2459 z M 1247 2418 C 1244 2410 1241 2413 1241 2424 C 1240 2435 1243 2441 1246 2437 C 1249 2434 1250 2425 1247 2418 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 33.03 -114.72)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1654.13, -2434.71)" d="M 1630 2444 C 1630 2426 1667 2406 1675 2420 C 1684 2434 1674 2447 1650 2453 C 1637 2456 1630 2453 1630 2444 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -49.6 -77.02)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1034.35, -2151.94)" d="M 1017 2179 C 995 2166 995 2131 1016 2123 C 1036 2115 1064 2131 1068 2153 C 1072 2174 1039 2191 1017 2179 z M 1045 2150 C 1042 2145 1035 2140 1029 2140 C 1024 2140 1020 2145 1020 2150 C 1020 2156 1027 2160 1036 2160 C 1044 2160 1048 2156 1045 2150 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 48.46 -77.07)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1769.83, -2152.31)" d="M 1745 2170 C 1730 2154 1730 2148 1740 2135 C 1756 2116 1784 2116 1800 2135 C 1813 2151 1807 2165 1781 2180 C 1767 2187 1758 2185 1745 2170 z M 1780 2150 C 1780 2145 1776 2140 1770 2140 C 1765 2140 1760 2145 1760 2150 C 1760 2156 1765 2160 1770 2160 C 1776 2160 1780 2156 1780 2150 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -34 -22.43)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1151.38, -1742.57)" d="M 1187 2153 C 1176 2143 1179 2118 1190 2125 C 1206 2135 1202 2123 1174 2083 C 1149 2046 1156 2026 1185 2050 C 1208 2069 1204 2037 1181 2016 C 1155 1992 1133 2005 1104 2061 C 1079 2112 1054 2124 1030 2095 C 1021 2084 1021 2068 1030 2024 C 1045 1951 1075 1905 1122 1884 C 1163 1866 1250 1783 1250 1763 C 1250 1756 1266 1735 1285 1717 L 1321 1683 L 1318 1519 L 1315 1355 L 1290 1355 L 1265 1355 L 1260 1527 C 1256 1681 1253 1701 1235 1722 C 1224 1735 1197 1765 1175 1790 C 1154 1815 1142 1829 1150 1823 C 1173 1802 1185 1808 1165 1830 C 1155 1842 1140 1848 1133 1845 C 1125 1843 1121 1844 1124 1849 C 1127 1853 1119 1862 1107 1867 C 1095 1873 1063 1905 1035 1938 C 1008 1972 979 1999 972 1999 C 959 2000 999 1954 1183 1750 L 1242 1684 L 1241 1523 C 1239 1387 1242 1360 1255 1346 C 1275 1327 1304 1325 1318 1343 C 1325 1350 1330 1424 1331 1529 L 1333 1702 L 1296 1732 C 1276 1748 1260 1766 1260 1772 C 1260 1788 1195 1882 1168 1905 C 1155 1916 1134 1931 1120 1937 C 1096 1949 1096 1949 1123 1927 C 1159 1897 1157 1886 1119 1905 C 1084 1924 1054 1983 1048 2044 C 1044 2098 1061 2098 1089 2044 C 1132 1963 1179 1964 1235 2048 C 1259 2085 1261 2130 1237 2130 C 1231 2130 1219 2137 1210 2145 C 1201 2153 1190 2157 1187 2153 z M 1240 2093 C 1240 2079 1221 2055 1215 2061 C 1207 2069 1220 2100 1231 2100 C 1236 2100 1240 2097 1240 2093 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 27.15 -76.09)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1610, -2145)" d="M 1600 2145 C 1600 2137 1605 2130 1610 2130 C 1616 2130 1620 2137 1620 2145 C 1620 2153 1616 2160 1610 2160 C 1605 2160 1600 2153 1600 2145 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 31.49 -21.36)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1642.59, -1734.54)" d="M 1568 2133 C 1526 2122 1576 2002 1630 1985 C 1657 1977 1692 2003 1719 2051 C 1752 2108 1767 2089 1746 2017 C 1730 1962 1680 1903 1660 1915 C 1645 1924 1576 1848 1553 1799 C 1541 1774 1515 1739 1496 1722 L 1460 1691 L 1460 1522 C 1460 1350 1464 1330 1500 1330 C 1509 1330 1524 1336 1534 1343 C 1550 1355 1552 1373 1551 1518 L 1549 1680 L 1691 1836 C 1769 1921 1829 1994 1825 1998 C 1822 2002 1813 1998 1807 1990 C 1790 1969 1564 1770 1556 1770 C 1540 1770 1583 1817 1666 1890 C 1735 1951 1760 1980 1769 2009 C 1790 2080 1781 2110 1737 2110 C 1730 2110 1714 2090 1701 2064 C 1664 1994 1647 1990 1600 2041 C 1571 2073 1565 2086 1573 2095 C 1583 2105 1586 2104 1588 2089 C 1590 2078 1596 2073 1602 2076 C 1609 2081 1611 2077 1607 2067 C 1603 2056 1608 2049 1621 2045 C 1632 2041 1644 2041 1647 2043 C 1651 2048 1592 2142 1587 2139 C 1586 2138 1577 2136 1568 2133 z M 1587 1752 L 1530 1694 L 1530 1528 C 1530 1391 1527 1361 1515 1357 C 1507 1353 1498 1355 1495 1360 C 1492 1366 1489 1440 1489 1526 C 1489 1639 1492 1686 1502 1697 C 1516 1715 1632 1809 1640 1810 C 1642 1810 1619 1784 1587 1752 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -29.96 -43.42)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1181.68, -1899.97)" d="M 1061 2038 C 1060 2010 1117 1953 1176 1923 C 1247 1887 1259 1873 1273 1809 C 1280 1780 1290 1755 1296 1753 C 1305 1750 1304 1765 1296 1807 C 1276 1901 1260 1923 1196 1943 C 1137 1962 1083 2000 1070 2034 C 1063 2051 1061 2051 1061 2038 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 28.46 -42.5)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1619.85, -1893.07)" d="M 1720 2011 C 1708 1987 1656 1958 1592 1939 C 1543 1925 1530 1906 1507 1817 C 1492 1759 1502 1737 1520 1788 C 1554 1880 1562 1890 1634 1928 C 1699 1962 1751 2012 1738 2026 C 1734 2029 1727 2022 1720 2011 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -27.22 -28.47)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1202.27, -1787.82)" d="M 1180 1802 C 1180 1788 1216 1759 1223 1767 C 1227 1770 1223 1782 1213 1792 C 1196 1811 1180 1816 1180 1802 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -1.18 8.57)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1397.5, -1510)" d="M 1357 1524 C 1359 1355 1365 1330 1399 1330 C 1436 1330 1440 1349 1440 1522 L 1440 1690 L 1398 1690 L 1355 1690 L 1357 1524 z M 1418 1513 C 1415 1380 1413 1355 1400 1355 C 1387 1355 1385 1380 1382 1513 C 1380 1666 1380 1670 1400 1670 C 1420 1670 1420 1666 1418 1513 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -44.43 -2.37)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1073.15, -1592.05)" d="M 1056 1631 C 1039 1612 1039 1611 1064 1595 C 1078 1585 1087 1574 1084 1568 C 1081 1563 1072 1564 1064 1571 C 1045 1587 1034 1575 1050 1555 C 1067 1534 1087 1536 1100 1559 C 1108 1575 1105 1582 1082 1600 C 1057 1620 1057 1621 1078 1617 C 1103 1611 1107 1622 1087 1639 C 1076 1647 1069 1645 1056 1631 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -89.71 -2.13)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-733.52, -1590.27)" d="M 707 1633 C 698 1616 702 1555 713 1548 C 734 1535 760 1539 760 1556 C 760 1566 754 1570 745 1567 C 737 1563 728 1565 725 1571 C 721 1576 729 1584 742 1589 L 765 1599 L 743 1599 C 715 1600 712 1620 740 1620 C 751 1620 760 1625 760 1630 C 760 1642 713 1644 707 1633 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -78.89 -2.39)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-814.69, -1592.27)" d="M 780 1595 C 780 1570 785 1550 791 1550 C 797 1550 799 1559 795 1570 C 786 1599 805 1595 818 1564 C 833 1533 853 1541 840 1574 C 835 1587 836 1603 841 1611 C 854 1632 852 1640 834 1640 C 823 1640 820 1634 825 1620 C 828 1609 827 1600 821 1600 C 816 1600 808 1609 805 1620 C 794 1655 780 1641 780 1595 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -68.42 -2.08)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-893.21, -1589.93)" d="M 867 1619 C 838 1579 883 1518 916 1552 C 933 1569 929 1600 910 1600 C 903 1600 901 1592 905 1580 C 912 1557 898 1553 881 1574 C 862 1596 879 1622 907 1615 C 925 1611 931 1613 928 1622 C 920 1644 883 1643 867 1619 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -58.2 -2.13)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-969.86, -1590.26)" d="M 944 1598 C 948 1575 956 1552 963 1548 C 982 1536 1002 1539 998 1553 C 995 1559 987 1565 979 1565 C 969 1565 966 1576 967 1603 C 969 1631 966 1640 953 1640 C 940 1640 939 1633 944 1598 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -51.52 -2.76)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1020, -1595)" d="M 1010 1595 C 1010 1570 1015 1550 1020 1550 C 1026 1550 1030 1570 1030 1595 C 1030 1620 1026 1640 1020 1640 C 1015 1640 1010 1620 1010 1595 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -33.77 -2.39)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1153.09, -1592.21)" d="M 1120 1589 C 1120 1558 1124 1541 1130 1545 C 1136 1548 1140 1560 1140 1571 C 1140 1583 1145 1590 1153 1587 C 1159 1585 1165 1576 1165 1567 C 1165 1558 1170 1550 1175 1550 C 1181 1550 1186 1570 1186 1595 C 1187 1626 1184 1640 1175 1640 C 1168 1640 1163 1633 1164 1624 C 1164 1615 1159 1605 1153 1603 C 1145 1600 1140 1607 1140 1619 C 1140 1631 1136 1640 1130 1640 C 1125 1640 1120 1617 1120 1589 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 27.57 -2.76)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1613.14, -1595)" d="M 1599 1605 C 1598 1586 1597 1566 1596 1560 C 1595 1555 1600 1550 1605 1550 C 1611 1550 1615 1559 1615 1569 C 1615 1580 1618 1592 1623 1596 C 1636 1609 1631 1640 1615 1640 C 1605 1640 1600 1629 1599 1605 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 33.02 -2.76)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1654, -1595)" d="M 1650 1615 C 1650 1601 1646 1590 1640 1590 C 1635 1590 1630 1581 1630 1570 C 1630 1559 1635 1550 1640 1550 C 1646 1550 1650 1559 1650 1570 C 1650 1581 1655 1590 1661 1590 C 1667 1590 1669 1581 1665 1570 C 1662 1559 1663 1550 1668 1550 C 1674 1550 1678 1570 1678 1595 C 1677 1626 1673 1640 1663 1640 C 1656 1640 1650 1629 1650 1615 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 42.2 -2.15)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1722.89, -1590.45)" d="M 1699 1635 C 1693 1612 1696 1563 1703 1553 C 1716 1535 1750 1537 1750 1555 C 1750 1564 1743 1570 1734 1568 C 1724 1566 1715 1571 1712 1579 C 1709 1589 1712 1591 1723 1587 C 1732 1584 1742 1585 1745 1590 C 1749 1596 1742 1600 1731 1600 C 1719 1600 1710 1605 1710 1610 C 1710 1616 1719 1620 1730 1620 C 1741 1620 1750 1625 1750 1630 C 1750 1640 1701 1645 1699 1635 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 52.41 -2.15)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1799.49, -1590.44)" d="M 1769 1633 C 1762 1564 1774 1532 1804 1543 C 1847 1560 1838 1640 1793 1640 C 1781 1640 1770 1637 1769 1633 z M 1816 1605 C 1823 1588 1802 1558 1789 1566 C 1782 1570 1782 1594 1789 1618 C 1792 1626 1812 1617 1816 1605 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 60.09 -2.17)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1857.08, -1590.6)" d="M 1850 1591 C 1850 1562 1854 1541 1858 1544 C 1867 1550 1866 1628 1856 1637 C 1853 1641 1850 1620 1850 1591 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 67.16 -2.32)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1910.05, -1591.73)" d="M 1880 1601 C 1880 1555 1902 1531 1925 1550 C 1942 1564 1946 1640 1930 1640 C 1925 1640 1920 1622 1920 1600 C 1920 1578 1916 1560 1910 1560 C 1905 1560 1900 1578 1900 1600 C 1900 1622 1896 1640 1890 1640 C 1885 1640 1880 1623 1880 1601 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 75.71 -2.26)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1974.17, -1591.3)" d="M 1960 1590 C 1960 1557 1964 1541 1970 1545 C 1976 1549 1978 1560 1975 1571 C 1971 1582 1973 1590 1980 1590 C 1995 1590 1988 1632 1973 1638 C 1964 1640 1960 1627 1960 1590 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 82.48 -2.76)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-2025, -1595)" d="M 2010 1626 C 2010 1597 2023 1550 2031 1550 C 2036 1550 2040 1570 2040 1595 C 2040 1628 2036 1640 2025 1640 C 2017 1640 2010 1634 2010 1626 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 79.15 0.57)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-2000, -1570)" d="M 1990 1570 C 1990 1559 1995 1550 2000 1550 C 2006 1550 2010 1559 2010 1570 C 2010 1581 2006 1590 2000 1590 C 1995 1590 1990 1581 1990 1570 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -2.71 39.83)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1386.05, -1275.57)" d="M 1329 1324 C 1320 1313 1306 1310 1282 1314 L 1248 1319 L 1296 1267 C 1345 1215 1345 1215 1404 1216 C 1462 1217 1463 1217 1497 1263 C 1530 1307 1531 1310 1510 1310 C 1498 1310 1479 1315 1468 1321 C 1454 1329 1445 1329 1437 1321 C 1421 1305 1379 1308 1360 1325 C 1345 1339 1341 1339 1329 1324 z M 1393 1292 C 1408 1290 1427 1293 1434 1299 C 1445 1308 1453 1308 1468 1299 C 1486 1287 1487 1285 1473 1263 C 1460 1244 1449 1240 1406 1240 C 1364 1240 1349 1245 1332 1263 C 1315 1281 1313 1289 1322 1298 C 1329 1305 1341 1307 1350 1304 C 1358 1300 1377 1295 1393 1292 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -29.95 46.69)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1181.79, -1224.11)" d="M 1006 1291 C 1005 1287 1004 1269 1005 1250 C 1006 1225 1010 1216 1020 1219 C 1044 1224 1169 1222 1204 1215 C 1227 1210 1231 1211 1220 1219 C 1208 1228 1210 1230 1230 1230 C 1259 1230 1315 1196 1315 1179 C 1315 1172 1325 1164 1338 1159 C 1366 1149 1366 1153 1338 1186 C 1312 1215 1231 1263 1180 1278 C 1141 1290 1010 1299 1006 1291 z M 1178 1259 C 1202 1252 1217 1243 1213 1239 C 1208 1234 1191 1234 1175 1238 C 1158 1242 1120 1245 1090 1245 C 1040 1244 1015 1254 1025 1270 C 1031 1279 1129 1272 1178 1259 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -0.95 58.22)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1399.23, -1137.63)" d="M 1700 1290 C 1600 1280 1507 1238 1457 1180 C 1437 1156 1417 1140 1413 1143 C 1410 1147 1414 1158 1423 1168 C 1447 1194 1445 1195 1400 1195 C 1357 1195 1351 1190 1375 1170 C 1402 1147 1391 1143 1303 1141 C 1254 1140 1186 1132 1150 1124 C 1083 1109 950 1053 950 1040 C 950 1036 957 1027 965 1020 C 973 1013 980 1001 980 994 C 980 972 995 977 1062 1024 C 1135 1075 1228 1108 1320 1117 C 1356 1120 1388 1128 1393 1134 C 1398 1142 1402 1142 1408 1134 C 1412 1128 1444 1120 1480 1117 C 1571 1109 1677 1070 1743 1022 C 1774 999 1803 980 1807 980 C 1815 980 1853 1041 1848 1045 C 1767 1099 1669 1130 1549 1137 C 1494 1140 1450 1145 1450 1146 C 1450 1158 1491 1195 1525 1215 C 1587 1252 1642 1268 1712 1271 C 1764 1273 1776 1271 1778 1257 C 1781 1242 1771 1240 1708 1240 C 1666 1240 1613 1233 1586 1224 C 1529 1204 1531 1194 1589 1210 C 1636 1222 1724 1225 1768 1215 C 1798 1209 1798 1209 1797 1251 C 1796 1274 1791 1294 1785 1295 C 1780 1296 1741 1294 1700 1290 z M 1758 1069 C 1792 1054 1820 1037 1820 1031 C 1820 1008 1797 1011 1755 1040 C 1730 1057 1691 1080 1667 1091 L 1625 1111 L 1660 1104 C 1679 1101 1723 1085 1758 1069 z M 1074 1055 C 997 1005 994 1004 987 1024 C 983 1034 998 1046 1033 1063 C 1143 1116 1162 1112 1074 1055 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -20.07 49.22)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1255.86, -1205.19)" d="M 1248 1203 C 1255 1200 1264 1201 1267 1204 C 1271 1207 1265 1210 1254 1209 C 1243 1209 1240 1206 1248 1203 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -36.3 56.9)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1134.17, -1147.57)" d="M 1022 1184 C 992 1178 966 1170 964 1167 C 960 1164 975 1119 986 1102 C 987 1100 1003 1105 1022 1113 C 1083 1139 1194 1162 1250 1162 L 1305 1162 L 1273 1176 C 1228 1195 1087 1200 1022 1184 z M 1090 1160 C 1008 1133 1000 1131 1000 1145 C 1000 1159 1029 1166 1085 1168 C 1114 1168 1114 1168 1090 1160 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 35.13 56.33)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1669.84, -1151.8)" d="M 1567 1185 C 1487 1168 1485 1160 1562 1160 C 1619 1160 1740 1133 1800 1106 C 1811 1101 1819 1109 1828 1132 C 1834 1150 1836 1167 1832 1171 C 1820 1181 1710 1200 1666 1199 C 1643 1198 1599 1192 1567 1185 z M 1687 1174 C 1684 1171 1675 1170 1668 1173 C 1660 1176 1663 1179 1674 1179 C 1685 1180 1691 1177 1687 1174 z M 1769 1164 C 1786 1160 1800 1151 1800 1143 C 1800 1128 1784 1130 1726 1156 C 1701 1167 1699 1169 1716 1170 C 1728 1170 1752 1167 1769 1164 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -34.68 78.49)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1146.3, -985.67)" d="M 1115 1018 C 1113 1011 1112 992 1113 975 C 1115 949 1119 945 1148 942 C 1166 940 1180 943 1180 949 C 1180 955 1169 960 1155 960 C 1141 960 1130 965 1130 970 C 1130 976 1139 980 1150 980 C 1161 980 1170 984 1170 990 C 1170 995 1164 997 1156 994 C 1148 991 1139 993 1135 999 C 1131 1006 1139 1010 1154 1010 C 1168 1010 1180 1015 1180 1020 C 1180 1035 1120 1032 1115 1018 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -11.11 78.86)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1323.07, -982.89)" d="M 1311 1005 C 1286 980 1288 954 1315 943 C 1337 935 1348 949 1352 989 C 1356 1031 1343 1036 1311 1005 z M 1332 975 C 1332 970 1327 964 1321 962 C 1315 960 1310 966 1310 975 C 1310 984 1315 990 1321 988 C 1327 986 1332 980 1332 975 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 11.19 78.62)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1490.32, -984.68)" d="M 1472 1018 C 1455 1001 1457 985 1475 1000 C 1500 1021 1505 1002 1482 977 C 1453 946 1454 940 1490 940 C 1520 940 1531 955 1508 963 C 1498 966 1498 970 1509 983 C 1535 1015 1501 1047 1472 1018 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 20.49 78.43)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1560.07, -986.05)" d="M 1534 1006 C 1521 952 1557 920 1583 962 C 1591 974 1591 986 1582 1004 C 1567 1037 1542 1038 1534 1006 z M 1570 985 C 1570 977 1566 968 1560 965 C 1554 961 1550 970 1550 985 C 1550 1000 1554 1009 1560 1005 C 1566 1002 1570 993 1570 985 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 28.39 78.67)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1619.33, -984.25)" d="M 1609 1013 C 1598 1000 1598 996 1607 993 C 1615 990 1618 979 1614 964 C 1609 946 1612 940 1624 940 C 1636 940 1639 950 1638 985 C 1635 1034 1630 1039 1609 1013 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 36.25 78.54)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1678.29, -985.3)" d="M 1659 1014 C 1647 1000 1649 995 1669 979 C 1687 964 1688 960 1676 960 C 1667 960 1660 955 1660 949 C 1660 943 1670 940 1683 942 C 1702 945 1705 951 1705 985 C 1705 1029 1683 1043 1659 1014 z M 1691 997 C 1690 985 1676 988 1672 1001 C 1669 1007 1673 1011 1680 1009 C 1686 1006 1691 1001 1691 997 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -18.13 79.15)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1270.43, -980.71)" d="M 1257 1013 C 1247 996 1263 940 1277 940 C 1289 940 1290 943 1281 954 C 1274 962 1272 979 1276 994 C 1282 1018 1268 1031 1257 1013 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -25.62 80.32)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1214.23, -971.93)" d="M 1200 1000 C 1187 991 1187 988 1203 976 C 1212 969 1220 960 1220 957 C 1220 953 1212 954 1203 957 C 1187 963 1187 962 1199 946 C 1212 931 1215 931 1228 944 C 1241 956 1241 962 1230 974 C 1221 986 1221 990 1229 990 C 1236 990 1238 995 1235 1000 C 1227 1013 1219 1012 1200 1000 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 0.67 79.88)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1411.39, -975.24)" d="M 1395 980 C 1392 974 1396 967 1405 964 C 1424 956 1435 964 1425 979 C 1417 993 1403 993 1395 980 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -3.92 83.24)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1377, -950)" d="M 1365 950 C 1362 945 1366 940 1374 940 C 1383 940 1390 945 1390 950 C 1390 956 1386 960 1381 960 C 1375 960 1368 956 1365 950 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 91.76 -71.44)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-2094.61, -2110.09)" d="M 2077 2153 C 2065 2141 2070 2094 2085 2074 C 2098 2058 2101 2057 2110 2070 C 2134 2106 2105 2181 2077 2153 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 101.84 -55.31)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-2170.21, -1989.12)" d="M 2157 2033 C 2147 2024 2149 1967 2159 1951 C 2173 1930 2190 1948 2190 1984 C 2190 2017 2170 2046 2157 2033 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 72.08 85.25)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1946.99, -934.97)" d="M 1937 944 C 1929 936 1938 920 1951 920 C 1956 920 1960 927 1960 935 C 1960 950 1948 955 1937 944 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 -19.92 113.25)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1256.99, -724.97)" d="M 1247 734 C 1239 726 1248 710 1261 710 C 1266 710 1270 717 1270 725 C 1270 740 1258 745 1247 734 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 3.28 114.57)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1431, -715)" d="M 1420 715 C 1420 706 1425 700 1431 702 C 1437 704 1442 710 1442 715 C 1442 720 1437 726 1431 728 C 1425 730 1420 724 1420 715 z" stroke-linecap="round" />
                        </g>
                                <g transform="matrix(0.13 0 0 -0.13 3.82 120.57)"  >
                        <path style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(9,16,241); fill-rule: nonzero; opacity: 1;" vector-effect="non-scaling-stroke"  transform=" translate(-1435, -670)" d="M 1420 670 C 1420 665 1427 660 1435 660 C 1443 660 1450 665 1450 670 C 1450 676 1443 680 1435 680 C 1427 680 1420 676 1420 670 z" stroke-linecap="round" />
                        </g>
                        </g>
                        </g>
                        </svg>
                        {{-- <img src="{{ asset('lfs_logo.png')}}" alt="Little Flower School Logo"> --}}
                        
                        {{-- <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('lfs_logo.png'))) }}" alt="Little Flower School Logo"> --}}
                    </div>
                    <div class="school-info">
                        <div class="english-medium">ENGLISH MEDIUM</div>
                        <div class="estd">Estd. 2019</div>

                    </div>
                </div>
                <div class="address">
                    Dayanagar Bahaliapara * Bhagwangola * MSD
                </div>
                <div class="contact">
                    Office Contact: 9064070076
                </div>
            </div>
            <h2 align="center">Identity Card</h2>
            <div class="photo-container">
                <div class="photo-placeholder-main">xx</div>
                <div class="photo-placeholder"></div>
            </div>
            <div class="details">
                <div class="detail-row">
                    <div class="name">NAME:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Inst. Reg. No.:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">C/O.:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">DOB:</div>
                    <div class="detail-value"></div>
                    <div class="detail-label">Gender:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Class:</div>
                    <div class="detail-value"></div>
                    <div class="detail-label">Sec:</div>
                    <div class="detail-value"></div>
                    <div class="detail-label">Roll:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Address:</div>
                    <div class="detail-value"></div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Parents Mob:</div>
                    <div class="detail-value"></div>
                </div>
            </div>
            <div class="signature">
                {{-- <img src="https://via.placeholder.com/100x40" alt="Signature"> --}}
                <div class="signature-label">Head of Institution</div>
            </div>
        </div>
    </div>
</body>

</html>