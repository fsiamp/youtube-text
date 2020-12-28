//
//  AppDelegate.m
//  Youtube Text
//
//  Created by Fanis Siampos on 9/10/16.
//  Copyright (c) 2016 Youtube Text. All rights reserved.
//

#import "AppDelegate.h"

@implementation AppDelegate

- (void)applicationDidFinishLaunching:(NSNotification *)aNotification
{
    NSRect frame=[NSScreen mainScreen].frame ;
    [self.window setFrame:frame display:YES animate:YES];
    
    
    NSURL *url = [NSURL URLWithString:@"http://yttext.tumblr.com"];
    NSURLRequest *urlRequest = [NSURLRequest requestWithURL:url];
    [[[self webView] mainFrame] loadRequest:urlRequest];
    [self.window setContentView:self.webView];

    [self.window setTitle:@"Youtube Text"];

}

@end
