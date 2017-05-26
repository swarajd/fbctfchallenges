
enigma:     file format elf32-i386


Disassembly of section .init:

08048334 <_init>:
 8048334:	53                   	push   %ebx
 8048335:	83 ec 08             	sub    $0x8,%esp
 8048338:	e8 b3 00 00 00       	call   80483f0 <__x86.get_pc_thunk.bx>
 804833d:	81 c3 c3 1c 00 00    	add    $0x1cc3,%ebx
 8048343:	8b 83 fc ff ff ff    	mov    -0x4(%ebx),%eax
 8048349:	85 c0                	test   %eax,%eax
 804834b:	74 05                	je     8048352 <_init+0x1e>
 804834d:	e8 5e 00 00 00       	call   80483b0 <__libc_start_main@plt+0x10>
 8048352:	83 c4 08             	add    $0x8,%esp
 8048355:	5b                   	pop    %ebx
 8048356:	c3                   	ret    

Disassembly of section .plt:

08048360 <__stack_chk_fail@plt-0x10>:
 8048360:	ff 35 04 a0 04 08    	pushl  0x804a004
 8048366:	ff 25 08 a0 04 08    	jmp    *0x804a008
 804836c:	00 00                	add    %al,(%eax)
	...

08048370 <__stack_chk_fail@plt>:
 8048370:	ff 25 0c a0 04 08    	jmp    *0x804a00c
 8048376:	68 00 00 00 00       	push   $0x0
 804837b:	e9 e0 ff ff ff       	jmp    8048360 <_init+0x2c>

08048380 <fwrite@plt>:
 8048380:	ff 25 10 a0 04 08    	jmp    *0x804a010
 8048386:	68 08 00 00 00       	push   $0x8
 804838b:	e9 d0 ff ff ff       	jmp    8048360 <_init+0x2c>

08048390 <puts@plt>:
 8048390:	ff 25 14 a0 04 08    	jmp    *0x804a014
 8048396:	68 10 00 00 00       	push   $0x10
 804839b:	e9 c0 ff ff ff       	jmp    8048360 <_init+0x2c>

080483a0 <__libc_start_main@plt>:
 80483a0:	ff 25 18 a0 04 08    	jmp    *0x804a018
 80483a6:	68 18 00 00 00       	push   $0x18
 80483ab:	e9 b0 ff ff ff       	jmp    8048360 <_init+0x2c>

Disassembly of section .plt.got:

080483b0 <.plt.got>:
 80483b0:	ff 25 fc 9f 04 08    	jmp    *0x8049ffc
 80483b6:	66 90                	xchg   %ax,%ax

Disassembly of section .text:

080483c0 <_start>:
 80483c0:	31 ed                	xor    %ebp,%ebp
 80483c2:	5e                   	pop    %esi
 80483c3:	89 e1                	mov    %esp,%ecx
 80483c5:	83 e4 f0             	and    $0xfffffff0,%esp
 80483c8:	50                   	push   %eax
 80483c9:	54                   	push   %esp
 80483ca:	52                   	push   %edx
 80483cb:	68 50 86 04 08       	push   $0x8048650
 80483d0:	68 f0 85 04 08       	push   $0x80485f0
 80483d5:	51                   	push   %ecx
 80483d6:	56                   	push   %esi
 80483d7:	68 bb 84 04 08       	push   $0x80484bb
 80483dc:	e8 bf ff ff ff       	call   80483a0 <__libc_start_main@plt>
 80483e1:	f4                   	hlt    
 80483e2:	66 90                	xchg   %ax,%ax
 80483e4:	66 90                	xchg   %ax,%ax
 80483e6:	66 90                	xchg   %ax,%ax
 80483e8:	66 90                	xchg   %ax,%ax
 80483ea:	66 90                	xchg   %ax,%ax
 80483ec:	66 90                	xchg   %ax,%ax
 80483ee:	66 90                	xchg   %ax,%ax

080483f0 <__x86.get_pc_thunk.bx>:
 80483f0:	8b 1c 24             	mov    (%esp),%ebx
 80483f3:	c3                   	ret    
 80483f4:	66 90                	xchg   %ax,%ax
 80483f6:	66 90                	xchg   %ax,%ax
 80483f8:	66 90                	xchg   %ax,%ax
 80483fa:	66 90                	xchg   %ax,%ax
 80483fc:	66 90                	xchg   %ax,%ax
 80483fe:	66 90                	xchg   %ax,%ax

08048400 <deregister_tm_clones>:
 8048400:	b8 27 a0 04 08       	mov    $0x804a027,%eax
 8048405:	2d 24 a0 04 08       	sub    $0x804a024,%eax
 804840a:	83 f8 06             	cmp    $0x6,%eax
 804840d:	76 1a                	jbe    8048429 <deregister_tm_clones+0x29>
 804840f:	b8 00 00 00 00       	mov    $0x0,%eax
 8048414:	85 c0                	test   %eax,%eax
 8048416:	74 11                	je     8048429 <deregister_tm_clones+0x29>
 8048418:	55                   	push   %ebp
 8048419:	89 e5                	mov    %esp,%ebp
 804841b:	83 ec 14             	sub    $0x14,%esp
 804841e:	68 24 a0 04 08       	push   $0x804a024
 8048423:	ff d0                	call   *%eax
 8048425:	83 c4 10             	add    $0x10,%esp
 8048428:	c9                   	leave  
 8048429:	f3 c3                	repz ret 
 804842b:	90                   	nop
 804842c:	8d 74 26 00          	lea    0x0(%esi,%eiz,1),%esi

08048430 <register_tm_clones>:
 8048430:	b8 24 a0 04 08       	mov    $0x804a024,%eax
 8048435:	2d 24 a0 04 08       	sub    $0x804a024,%eax
 804843a:	c1 f8 02             	sar    $0x2,%eax
 804843d:	89 c2                	mov    %eax,%edx
 804843f:	c1 ea 1f             	shr    $0x1f,%edx
 8048442:	01 d0                	add    %edx,%eax
 8048444:	d1 f8                	sar    %eax
 8048446:	74 1b                	je     8048463 <register_tm_clones+0x33>
 8048448:	ba 00 00 00 00       	mov    $0x0,%edx
 804844d:	85 d2                	test   %edx,%edx
 804844f:	74 12                	je     8048463 <register_tm_clones+0x33>
 8048451:	55                   	push   %ebp
 8048452:	89 e5                	mov    %esp,%ebp
 8048454:	83 ec 10             	sub    $0x10,%esp
 8048457:	50                   	push   %eax
 8048458:	68 24 a0 04 08       	push   $0x804a024
 804845d:	ff d2                	call   *%edx
 804845f:	83 c4 10             	add    $0x10,%esp
 8048462:	c9                   	leave  
 8048463:	f3 c3                	repz ret 
 8048465:	8d 74 26 00          	lea    0x0(%esi,%eiz,1),%esi
 8048469:	8d bc 27 00 00 00 00 	lea    0x0(%edi,%eiz,1),%edi

08048470 <__do_global_dtors_aux>:
 8048470:	80 3d 28 a0 04 08 00 	cmpb   $0x0,0x804a028
 8048477:	75 13                	jne    804848c <__do_global_dtors_aux+0x1c>
 8048479:	55                   	push   %ebp
 804847a:	89 e5                	mov    %esp,%ebp
 804847c:	83 ec 08             	sub    $0x8,%esp
 804847f:	e8 7c ff ff ff       	call   8048400 <deregister_tm_clones>
 8048484:	c6 05 28 a0 04 08 01 	movb   $0x1,0x804a028
 804848b:	c9                   	leave  
 804848c:	f3 c3                	repz ret 
 804848e:	66 90                	xchg   %ax,%ax

08048490 <frame_dummy>:
 8048490:	b8 10 9f 04 08       	mov    $0x8049f10,%eax
 8048495:	8b 10                	mov    (%eax),%edx
 8048497:	85 d2                	test   %edx,%edx
 8048499:	75 05                	jne    80484a0 <frame_dummy+0x10>
 804849b:	eb 93                	jmp    8048430 <register_tm_clones>
 804849d:	8d 76 00             	lea    0x0(%esi),%esi
 80484a0:	ba 00 00 00 00       	mov    $0x0,%edx
 80484a5:	85 d2                	test   %edx,%edx
 80484a7:	74 f2                	je     804849b <frame_dummy+0xb>
 80484a9:	55                   	push   %ebp
 80484aa:	89 e5                	mov    %esp,%ebp
 80484ac:	83 ec 14             	sub    $0x14,%esp
 80484af:	50                   	push   %eax
 80484b0:	ff d2                	call   *%edx
 80484b2:	83 c4 10             	add    $0x10,%esp
 80484b5:	c9                   	leave  
 80484b6:	e9 75 ff ff ff       	jmp    8048430 <register_tm_clones>

080484bb <main>:
 80484bb:	8d 4c 24 04          	lea    0x4(%esp),%ecx
 80484bf:	83 e4 f0             	and    $0xfffffff0,%esp
 80484c2:	ff 71 fc             	pushl  -0x4(%ecx)
 80484c5:	55                   	push   %ebp
 80484c6:	89 e5                	mov    %esp,%ebp
 80484c8:	51                   	push   %ecx
 80484c9:	83 ec 04             	sub    $0x4,%esp
 80484cc:	89 c8                	mov    %ecx,%eax
 80484ce:	8b 50 04             	mov    0x4(%eax),%edx
 80484d1:	83 c2 04             	add    $0x4,%edx
 80484d4:	8b 12                	mov    (%edx),%edx
 80484d6:	85 d2                	test   %edx,%edx
 80484d8:	75 1e                	jne    80484f8 <main+0x3d>
 80484da:	a1 24 a0 04 08       	mov    0x804a024,%eax
 80484df:	50                   	push   %eax
 80484e0:	6a 14                	push   $0x14
 80484e2:	6a 01                	push   $0x1
 80484e4:	68 70 86 04 08       	push   $0x8048670
 80484e9:	e8 92 fe ff ff       	call   8048380 <fwrite@plt>
 80484ee:	83 c4 10             	add    $0x10,%esp
 80484f1:	b8 00 00 00 00       	mov    $0x0,%eax
 80484f6:	eb 19                	jmp    8048511 <main+0x56>
 80484f8:	8b 40 04             	mov    0x4(%eax),%eax
 80484fb:	83 c0 04             	add    $0x4,%eax
 80484fe:	8b 00                	mov    (%eax),%eax
 8048500:	83 ec 0c             	sub    $0xc,%esp
 8048503:	50                   	push   %eax
 8048504:	e8 10 00 00 00       	call   8048519 <enigma>
 8048509:	83 c4 10             	add    $0x10,%esp
 804850c:	b8 00 00 00 00       	mov    $0x0,%eax
 8048511:	8b 4d fc             	mov    -0x4(%ebp),%ecx
 8048514:	c9                   	leave  
 8048515:	8d 61 fc             	lea    -0x4(%ecx),%esp
 8048518:	c3                   	ret    

08048519 <enigma>:
 8048519:	55                   	push   %ebp
 804851a:	89 e5                	mov    %esp,%ebp
 804851c:	83 ec 48             	sub    $0x48,%esp
 804851f:	8b 45 08             	mov    0x8(%ebp),%eax
 8048522:	89 45 c4             	mov    %eax,-0x3c(%ebp)
 8048525:	65 a1 14 00 00 00    	mov    %gs:0x14,%eax
 804852b:	89 45 f4             	mov    %eax,-0xc(%ebp)
 804852e:	31 c0                	xor    %eax,%eax
 8048530:	c7 45 cc 05 00 00 00 	movl   $0x5,-0x34(%ebp)
 8048537:	c7 45 d0 03 00 00 00 	movl   $0x3,-0x30(%ebp)
 804853e:	c7 45 d4 01 00 00 00 	movl   $0x1,-0x2c(%ebp)
 8048545:	c7 45 d8 04 00 00 00 	movl   $0x4,-0x28(%ebp)
 804854c:	c7 45 dc 06 00 00 00 	movl   $0x6,-0x24(%ebp)
 8048553:	c7 45 e0 02 00 00 00 	movl   $0x2,-0x20(%ebp)
 804855a:	c7 45 e4 07 00 00 00 	movl   $0x7,-0x1c(%ebp)
 8048561:	c7 45 e8 00 00 00 00 	movl   $0x0,-0x18(%ebp)
 8048568:	c6 45 ec 69          	movb   $0x69,-0x14(%ebp)
 804856c:	c6 45 ed 6e          	movb   $0x6e,-0x13(%ebp)
 8048570:	c6 45 ee 64          	movb   $0x64,-0x12(%ebp)
 8048574:	c6 45 ef 65          	movb   $0x65,-0x11(%ebp)
 8048578:	c6 45 f0 66          	movb   $0x66,-0x10(%ebp)
 804857c:	c6 45 f1 63          	movb   $0x63,-0xf(%ebp)
 8048580:	c6 45 f2 6f          	movb   $0x6f,-0xe(%ebp)
 8048584:	c6 45 f3 6e          	movb   $0x6e,-0xd(%ebp)
 8048588:	c7 45 c8 00 00 00 00 	movl   $0x0,-0x38(%ebp)
 804858f:	eb 26                	jmp    80485b7 <enigma+0x9e>
 8048591:	8b 55 c8             	mov    -0x38(%ebp),%edx
 8048594:	8b 45 c4             	mov    -0x3c(%ebp),%eax
 8048597:	01 d0                	add    %edx,%eax
 8048599:	0f b6 10             	movzbl (%eax),%edx
 804859c:	8b 45 c8             	mov    -0x38(%ebp),%eax
 804859f:	8b 44 85 cc          	mov    -0x34(%ebp,%eax,4),%eax
 80485a3:	0f b6 44 05 ec       	movzbl -0x14(%ebp,%eax,1),%eax
 80485a8:	38 c2                	cmp    %al,%dl
 80485aa:	74 07                	je     80485b3 <enigma+0x9a>
 80485ac:	b8 00 00 00 00       	mov    $0x0,%eax
 80485b1:	eb 1f                	jmp    80485d2 <enigma+0xb9>
 80485b3:	83 45 c8 01          	addl   $0x1,-0x38(%ebp)
 80485b7:	83 7d c8 07          	cmpl   $0x7,-0x38(%ebp)
 80485bb:	7e d4                	jle    8048591 <enigma+0x78>
 80485bd:	83 ec 0c             	sub    $0xc,%esp
 80485c0:	68 85 86 04 08       	push   $0x8048685
 80485c5:	e8 c6 fd ff ff       	call   8048390 <puts@plt>
 80485ca:	83 c4 10             	add    $0x10,%esp
 80485cd:	b8 00 00 00 00       	mov    $0x0,%eax
 80485d2:	8b 4d f4             	mov    -0xc(%ebp),%ecx
 80485d5:	65 33 0d 14 00 00 00 	xor    %gs:0x14,%ecx
 80485dc:	74 05                	je     80485e3 <enigma+0xca>
 80485de:	e8 8d fd ff ff       	call   8048370 <__stack_chk_fail@plt>
 80485e3:	c9                   	leave  
 80485e4:	c3                   	ret    
 80485e5:	66 90                	xchg   %ax,%ax
 80485e7:	66 90                	xchg   %ax,%ax
 80485e9:	66 90                	xchg   %ax,%ax
 80485eb:	66 90                	xchg   %ax,%ax
 80485ed:	66 90                	xchg   %ax,%ax
 80485ef:	90                   	nop

080485f0 <__libc_csu_init>:
 80485f0:	55                   	push   %ebp
 80485f1:	57                   	push   %edi
 80485f2:	56                   	push   %esi
 80485f3:	53                   	push   %ebx
 80485f4:	e8 f7 fd ff ff       	call   80483f0 <__x86.get_pc_thunk.bx>
 80485f9:	81 c3 07 1a 00 00    	add    $0x1a07,%ebx
 80485ff:	83 ec 0c             	sub    $0xc,%esp
 8048602:	8b 6c 24 20          	mov    0x20(%esp),%ebp
 8048606:	8d b3 0c ff ff ff    	lea    -0xf4(%ebx),%esi
 804860c:	e8 23 fd ff ff       	call   8048334 <_init>
 8048611:	8d 83 08 ff ff ff    	lea    -0xf8(%ebx),%eax
 8048617:	29 c6                	sub    %eax,%esi
 8048619:	c1 fe 02             	sar    $0x2,%esi
 804861c:	85 f6                	test   %esi,%esi
 804861e:	74 25                	je     8048645 <__libc_csu_init+0x55>
 8048620:	31 ff                	xor    %edi,%edi
 8048622:	8d b6 00 00 00 00    	lea    0x0(%esi),%esi
 8048628:	83 ec 04             	sub    $0x4,%esp
 804862b:	ff 74 24 2c          	pushl  0x2c(%esp)
 804862f:	ff 74 24 2c          	pushl  0x2c(%esp)
 8048633:	55                   	push   %ebp
 8048634:	ff 94 bb 08 ff ff ff 	call   *-0xf8(%ebx,%edi,4)
 804863b:	83 c7 01             	add    $0x1,%edi
 804863e:	83 c4 10             	add    $0x10,%esp
 8048641:	39 f7                	cmp    %esi,%edi
 8048643:	75 e3                	jne    8048628 <__libc_csu_init+0x38>
 8048645:	83 c4 0c             	add    $0xc,%esp
 8048648:	5b                   	pop    %ebx
 8048649:	5e                   	pop    %esi
 804864a:	5f                   	pop    %edi
 804864b:	5d                   	pop    %ebp
 804864c:	c3                   	ret    
 804864d:	8d 76 00             	lea    0x0(%esi),%esi

08048650 <__libc_csu_fini>:
 8048650:	f3 c3                	repz ret 

Disassembly of section .fini:

08048654 <_fini>:
 8048654:	53                   	push   %ebx
 8048655:	83 ec 08             	sub    $0x8,%esp
 8048658:	e8 93 fd ff ff       	call   80483f0 <__x86.get_pc_thunk.bx>
 804865d:	81 c3 a3 19 00 00    	add    $0x19a3,%ebx
 8048663:	83 c4 08             	add    $0x8,%esp
 8048666:	5b                   	pop    %ebx
 8048667:	c3                   	ret    
